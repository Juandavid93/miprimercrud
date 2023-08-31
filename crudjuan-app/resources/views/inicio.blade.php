
@extends('plantilla')
@section('titulopagina','Crud laravel')
@section('contenido')
<div class="card">
  <h5 class="card-header">Crud Juan David</h5>
  <div class="card-body">
    <h5 class="card-title text-center">Listado de usuarios</h5>
    <a href="{{ route('personas.create') }}" class="btn btn-primary">Agregar usuario</a>

    </a>
   
    <hr>

    <p class="card-text">

    <div class="table table-responsive">
      <table class="table table-sm table-bordered">
        <thead>
          <th>Nombres</th>
          <th>Primer apellido</th>
          <th>Segundo apellido</th>
          <th>Fecha de nacimiento</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </thead>
        <tbody>
          @foreach($datos as $item)
          <tr>
            <td>{{$item->nombre}}</td>
            <td>{{$item->paterno}}</td>
            <td>{{$item->materno}}</td>
            <td>{{$item->fecha_nacimiento}}</td>
            <td></td>
            <td></td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
    </p>
    
  </div>
</div>
@endsection