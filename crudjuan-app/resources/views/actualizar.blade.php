@extends('plantilla')
@section('titulopagina','Crear usuario')
@section('contenido')

<div class="card">
  <h5 class="card-header">Actualizar datos</h5>
  <div class="card-body">
    
    <p class="card-text">

        <form action="#">

        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
        <label for="">Primer Apellido</label>
        <input type="text" name="paterno" class="form-control" required>
        <label for="">Segundo Apeliido</label>
        <input type="text" name="matenro" class="form-control" required>
        <label for="">Fecha nacimiento</label>
        <input type="date" name="fecha_nacimiento" class="form-control" required>
        <br>
        <a href="{{ route('personas.index') }}"class="btn btn-info">Regresar</a>
        <button class="btn btn-warning">Actualizar</button>
        </form>
    </p>
    
  </div>
</div>

@endsection