@extends('admin.layout')

@section('header')
  <h1>
    Medida: {{ $amenaza->nombre }} - Medidas
    <small>Formuario ingreso</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Medidas</a></li>
    <li class="active">Crear</li>
  </ol>
@stop

@section('content')
  <div class="row">
    <div class="col-lg-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Formulario alta nueva de medidas</h3>
        </div>
        <div class="box-body">
          <form role="form" method="POST" action="{{ route('admin.medidas.store') }}" >
            {{ csrf_field() }}
            <input type="hidden" name="amenazaId" value="{{ $amenaza->id }}">
            <div class="form-group {{ $errors->has('descripcion') ? ' is-invalid' : '' }}">
              <label>Descripción</label>
              <input name="descripcion" value="{{ old('descripcion') }}" class="form-control" placeholder="Ingrese descripcion de la medida">
              {!! $errors->first('descripcion', '<span class="text-danger">:message</span>') !!}
            </div>
            <div class="form-group {{ $errors->has('tipoMedida') ? ' is-invalid' : '' }}">
              <label>Tipo de Medida</label>
              <select name="tipoMedida" class="form-control">
                <option value="">Seleccion una opción</option>
                <option value="Preventiva">Preventiva</option>
                <option value="Detectiva">Detectiva</option>
                <option value="Correctiva">Correctiva</option>
              </select>
              {!! $errors->first('tipoMedida', '<span class="text-danger">:message</span>') !!}
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
