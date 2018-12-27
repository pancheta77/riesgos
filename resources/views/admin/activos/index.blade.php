@extends('admin.layout')

@section('header')
  <h1>
    Empresa: {{ $empresa->razonSocial }} - Activos
    <small>Disponibles</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Análisis</a></li>
    <li class="active">Activos</li>
  </ol>
@stop

@section('content')

  <div class="box box-primary">
    <div class="box-body">
      <div class="box-header">
        <a href="{{ route('admin.activos.create', $empresa) }}" class="btn btn-primary"><i class="fa fa-plus"> Agregar activo</i></a>
      </div>
      <table id="empresas" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Responsable</th>
          <th>Ubicación</th>
          <th>Crítico</th>
          <th>Amenazas</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($activos as $activo)
            <tr>
              <td> {{ $activo->nombre}} </td>
              <td> {{ $activo->descripcion}} </td>
              <td> {{ $activo->responsable}} </td>
              <td> {{ $activo->ubicacion}} </td>
              <td> {{ $activo->critico}} </td>
              <td>
                {{-- <a href="{{ route('admin.analisis', $empresa) }}" class="btn btn-success btn-xs"><i class="fa fa-area-chart"></i></a> --}}
                <a href="{{ route('admin.amenazas.show', $activo) }}" class="btn btn-warning btn-xs"><i class="fa fa-list"></i></a>
              </td>
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
