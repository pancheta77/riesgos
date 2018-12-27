@extends('admin.layout')

@section('header')
  <h1>
    Empresas
    <small>Disponibles</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Análisis</a></li>
    <li class="active">Gráficos</li>
  </ol>
@stop

@section('content')
  <div class="box">
   <div class="box-body">
     <table id="empresas" class="table table-bordered table-striped">
       <thead>
       <tr>
         <th>ID</th>
         <th>Nombre Empresa</th>
         <th>Acciones</th>
       </tr>
       </thead>
       <tbody>
         @foreach ($empresas as $empresa)
           <tr>
             <td> {{ $empresa->id}} </td>
             <td> {{ $empresa->razonSocial}} </td>
             <td>
               <a href="{{ route('admin.analisis', $empresa) }}" class="btn btn-success btn-xs"><i class="fa fa-area-chart"></i></a>
               <a href="{{ route('admin.activos.show', $empresa) }}" class="btn btn-warning btn-xs"><i class="fa fa-list"></i></a>
             </td>
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
