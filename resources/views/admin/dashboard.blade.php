@extends('admin.layout')

@section('header')
  <h1>
    Administración
    <small>Panel Principal</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Inicio</li>
  </ol>
@stop

@section('content')
  <div class="col-md-6">
    <div class="box box-solid">
      <div class="box-header with-border">
        <i class="fa fa-lock"></i>

        <h3 class="box-title">Usuario Autenticado</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <dl>
          <dt>Usuario</dt>
          <dd>{{ auth()->user()->name }}</dd>
          <dt>Correo electrónico</dt>
          <dd>{{ auth()->user()->email }}</dd>
          <dt>Actividad</dt>
          <dd>Fecha: {{ $fecha->format('d/m/Y') }} | Hora: {{ $fecha->format('H:i:s')}}</dd>
        </dl>
      </div>
      <!-- /.box-body -->
    </div>
  </div>

@stop
