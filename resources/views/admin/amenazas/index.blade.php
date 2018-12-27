@extends('admin.layout')

@section('header')
  <h1>
    Activo: {{ $activo->nombre }} - Amenazas
    <small>Disponibles</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Análisis</a></li>
    <li class="active">Amenazas</li>
  </ol>
@stop

@section('content')

  <div class="box box-primary">
    <div class="box-body">
      <div class="box-header">
        <a href="{{ route('admin.amenazas.create', $activo) }}" class="btn btn-primary"><i class="fa fa-plus"> Agregar amenaza</i></a>
      </div>
      <table id="amenazas-table" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nombre</th>
          <th>Probabilidad</th>
          <th>Impacto</th>
          <th>Riesgo</th>
          <th>Ponderación</th>
          <th>Medidas</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($amenazas as $amenaza)
            <tr>
              <td> {{ $amenaza->detalle}} </td>
              <td> {{ $amenaza->probabilidad}} </td>
              <td> {{ $amenaza->impacto}} </td>
              <td> {{ $amenaza->riesgo->riesgo}} </td>
              <td> {{ $amenaza->riesgo->ponderacion}} </td>
              <td>
                <a href="{{$activo->id}}/edit/{{$amenaza->id}}" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                <a href="{{ route('admin.medidas.show', $amenaza) }}" class="btn btn-warning btn-xs"><i class="fa fa-list"></i></a>
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
