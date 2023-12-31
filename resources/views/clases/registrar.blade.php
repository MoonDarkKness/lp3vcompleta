@extends('adminlte::page')

@section('title', )

@section('content_header')
   <h1>Registrar Curso</h1>
@stop

@section('content')
    
<form action="guardar" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre"  type="text" name="nombre" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Instructor</label>
    <input id="instructor" name="instructor"  type="text" class="form-control" tabindex="2">
  </div>  
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Leccion</label>
    <input id="leccion"  type="text" name="leccion"  class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">categoria</label>
    <input id="categoria"  type="text" name="categoria"  class="form-control" tabindex="1">    
  </div>
  <a href="/clases/mostrar" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop