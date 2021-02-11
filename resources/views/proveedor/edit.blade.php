@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR Proveedor</h2>

<form action="/proveedores/{{$proveedor->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Empresa</label>
    <input id="empresa" name="empresa" type="text" class="form-control" value="{{$proveedor->empresa}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$proveedor->descripcion}}">
  </div>
  <div class="mb-3"><div class="mb-3">
    <label for="" class="form-label">Categoría</label>
    <input id="categoria" name="categoria" type="text" class="form-control" value="{{$proveedor->categoria}}">
  </div>
    <label for="" class="form-label">Dirección</label>
    <input id="direccion" name="direccion" type="text" step="any" class="form-control" value="{{$proveedor->direccion}}">
  </div>
  <a href="/proveedores" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection