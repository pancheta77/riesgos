@extends('admin.layout')

@section('header')
  <h1>
    Matriz de Riesgos
    <small>Valores</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Matriz de Riesgo</a></li>
    <li class="active">Gráficos</li>
  </ol>
@stop

@section('content')
  <div class="box">
   <div class="box-body">
     <table id="empresas" class="table table-bordered table-striped">
       <thead>
       <tr>
         <th>Probabilidad</th>
         <th>Impacto</th>
         <th>Riesgo</th>
         <th>Ponderación</th>
       </tr>
       </thead>
       <tbody>
         @foreach ($matriz as $mat)
           <tr>
             <td> {{ $mat->probabilidad}} </td>
             <td> {{ $mat->impacto}} </td>
             <td> {{ $mat->riesgo}} </td>
             <td> {{ $mat->ponderacion}} </td>
           </tr>
         @endforeach
       </tbody>

     </table>
   </div>
   <!-- /.box-body -->
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
      $('#empresas').DataTable({
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
