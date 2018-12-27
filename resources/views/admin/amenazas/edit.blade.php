@extends('admin.layout')

@section('header')
  <h1>
    Activo: {{ $activo->nombre }} - Amenazas
    <small>Edición</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Amenazas</a></li>
    <li class="active">Editar</li>
  </ol>
@stop

@section('content')
  <div class="row">
    <div class="col-lg-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Formulario edición de amenaza</h3>
        </div>
        <div class="box-body">
          <form role="form" method="POST" action="{{ route('admin.amenazas.update', $amenaza) }}" >
            {{ csrf_field() }} {{ method_field('PUT') }}
            <input type="hidden" name="activoId" value="{{ $activo->id }}">
            <div class="form-group {{ $errors->has('detalle') ? ' is-invalid' : '' }}">
              <label>Nombre</label>
              <input name="detalle" value="{{ old('detalle', $amenaza->detalle) }}" class="form-control" placeholder="Detalle de la amenaza">
              {!! $errors->first('detalle', '<span class="text-danger">:message</span>') !!}
            </div>
            <div class="form-group {{ $errors->has('probabilidad') ? ' is-invalid' : '' }}">
              <label>Probabilidad</label>
              <select name="probabilidad" class="form-control">
                <option value="">Seleccion una opción</option>
                <option value="Baja">Baja</option>
                <option value="Media">Media</option>
                <option value="Alta">Alta</option>
              </select>
              {!! $errors->first('probabilidad', '<span class="text-danger">:message</span>') !!}
            </div>
            <div class="form-group {{ $errors->has('impacto') ? ' is-invalid' : '' }}">
              <label>Impacto</label>
              <select name="impacto" class="form-control">
                <option value="">Seleccion una opción</option>
                <option value="Bajo">Bajo</option>
                <option value="Medio">Medio</option>
                <option value="Alto">Alto</option>
              </select>
              {!! $errors->first('impacto', '<span class="text-danger">:message</span>') !!}
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary pull-right">Actualizar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop
