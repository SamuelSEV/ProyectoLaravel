@extends('layouts.plantillabase')

@section('contenido')

<h2>CREAR NUEVO PROVEEDOR</h2>

<form action="/proveedores" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Empresa</label>
    <input id="empresa" name="empresa" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Categoría</label>
    <input id="categoria" name="categoria" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="4">
  </div>
  <a href="/proveedores" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>

@endsection