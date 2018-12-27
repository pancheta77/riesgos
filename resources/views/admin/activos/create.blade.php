@extends('admin.layout')

@section('header')
  <h1>
    Empresa: {{ $empresa->razonSocial }} - Activo
    <small>Formuario ingreso</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Activos</a></li>
    <li class="active">Crear</li>
  </ol>
@stop

@section('content')
  <div class="row">
    <div class="col-lg-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Formulario alta nueva de activo</h3>
        </div>
        <div class="box-body">
          <form role="form" method="POST" action="{{ route('admin.activos.store') }}" >
            {{ csrf_field() }}
            <input type="hidden" name="empresaId" value="{{ $empresa->id }}">
            <div class="form-group {{ $errors->has('nombre') ? ' is-invalid' : '' }}">
              <label>Nombre</label>
              <input name="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="Ingrese nombre del activo">
              {!! $errors->first('nombre', '<span class="text-danger">:message</span>') !!}
            </div>
            <div class="form-group {{ $errors->has('descripcion') ? ' is-invalid' : '' }}">
              <label>Descripción</label>
              <input name="descripcion" value="{{ old('descripcion') }}" class="form-control" placeholder="Ingrese descripción del activo">
              {!! $errors->first('descripcion', '<span class="text-danger">:message</span>') !!}
            </div>
            <div class="form-group {{ $errors->has('responsable') ? ' is-invalid' : '' }}">
              <label>Responsable</label>
              <input name="responsable" value="{{ old('responsable') }}" class="form-control" placeholder="Ingrese responsable del activo">
              {!! $errors->first('responsable', '<span class="text-danger">:message</span>') !!}
            </div>
            <div class="form-group {{ $errors->has('ubicacion') ? ' is-invalid' : '' }}">
              <label>Ubicación</label>
              <input name="ubicacion" value="{{ old('ubicacion') }}" class="form-control" placeholder="Ingrese ubicación del activo">
              {!! $errors->first('ubicacion', '<span class="text-danger">:message</span>') !!}
            </div>
            <div class="form-group {{ $errors->has('critico') ? ' is-invalid' : '' }}">
              <label>Criticidad</label>
              <select name="critico" class="form-control">
                <option value="">Seleccion una opción</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
              </select>
              {!! $errors->first('critico', '<span class="text-danger">:message</span>') !!}
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary pull-right">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop
