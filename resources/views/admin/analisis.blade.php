@extends('admin.layout')

@section('header')
  <h1>
    Gráficos
    <small>Análisis de Riesgos</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Análisis</a></li>
    <li class="active">Gráficos</li>
  </ol>
@stop

@section('content')
<div class="col-md-11">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Riesgos representados en gráfico de barras</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> --}}
      </div>
    </div>
    <div class="box-body">
        <div id="chart_div" style="width: 900px; height: 500px;"></div>
    </div>
    <!-- /.box-body -->
  </div>

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Riesgos representados en gráfico de torta</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> --}}
      </div>
    </div>
    <div class="box-body">
        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    </div>
    <!-- /.box-body -->
  </div>


@stop

@push('scripts')
  {{--BarChart Graph  --}}
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {

      var button = document.getElementById('change-chart');
      var chartDiv = document.getElementById('chart_div');

      var data = google.visualization.arrayToDataTable([
        ['Activo', 'Riesgo'],
        @foreach ($datos as $dato)
          ['{{ $dato->detalle }}' ,{{$dato->ponderacion}}],
        @endforeach
      ]);

      var materialOptions = {
        width: 900,
        chart: {
          title: 'Empresa: {{ $dato->razonSocial }}',
          subtitle: 'Análisis de riesgo sobre los activos de la organización'
        },
        series: {
          0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
          1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
        },
        axes: {
          y: {
            distance: {label: 'Ponderación'}, // Left y-axis.
            brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
          }
        }
      };

      var classicOptions = {
        width: 900,
        series: {
          0: {targetAxisIndex: 0},
          1: {targetAxisIndex: 1}
        },
        title: 'Nearby galaxies - distance on the left, brightness on the right',
        vAxes: {
          // Adds titles to each axis.
          0: {title: 'parsecs'},
          1: {title: 'apparent magnitude'}
        }
      };

      function drawMaterialChart() {
        var materialChart = new google.charts.Bar(chartDiv);
        materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
        button.innerText = 'Change to Classic';
        button.onclick = drawClassicChart;
      }

      function drawClassicChart() {
        var classicChart = new google.visualization.ColumnChart(chartDiv);
        classicChart.draw(data, classicOptions);
        button.innerText = 'Change to Material';
        button.onclick = drawMaterialChart;
      }

      drawMaterialChart();
    };
    </script>

    {{--PieChart  --}}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Inventario', 'ponderación'],
          @foreach ($datos as $dato)
            ['{{ $dato->nombre}} | {{ $dato->detalle}} | Riesgo: {{ $dato->riesgo}}',{{$dato->ponderacion}}],
          @endforeach
        ]);

        var options = {
          title: 'Empresa: {{ $dato->razonSocial }}',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
@endpush
