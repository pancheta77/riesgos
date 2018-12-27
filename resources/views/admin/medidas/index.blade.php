@extends('admin.layout')

@section('header')
  <h1>
    Medidas
    <small>Disponibles</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Análisis</a></li>
    <li class="active">Medidas</li>
  </ol>
@stop

@section('content')
  <div class="box box-primary">
    <div class="box-body">
      <div class="box-header">
        <a href="{{ route('admin.medidas.create', $amenaza) }}" class="btn btn-primary"><i class="fa fa-plus"> Agregar medida</i></a>
      </div>
      <table id="amenazas-table" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Descripción</th>
          <th>Tipo de medida</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($medidas as $medida)
            <tr>
              <td> {{ $medida->descripcion}} </td>
              <td> {{ $medida->tipoMedida}} </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>


@stop

@push('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endpush

@push('scripts')
  <!-- DataTables -->
  <script src="/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  <script>
    $(function () {
      $('#amenazas-table').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false,
        "language": {"url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"}
      })
    })
  </script>
@endpush
