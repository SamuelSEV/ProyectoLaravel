@extends('layouts.plantillabase')

@section('contenido')
<a href="proveedores/create" class="btn btn-primary">Nuevo Proveedor</a>
<a href="articulos" class="btn btn-primary">ARTICULOS</a>
<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Empresa</th>
            <th scope="col">Descripción</th>
            <th scope="col">Categoría</th>
            <th scope="col">Dirección</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($proveedores as $proveedor)
        <tr>
            <td>{{ $proveedor->id}}</td>
            <td>{{ $proveedor->empresa}}</td>
            <td>{{ $proveedor->descripcion}}</td>
            <td>{{ $proveedor->categoria}}</td>
            <td>{{ $proveedor->descripcion}}</td>
            <td>
                <form action="{{route('proveedores.destroy', $proveedor->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/proveedores/{{ $proveedor->id}}/edit" class="btn btn-info">Editar</a>
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
@endsection