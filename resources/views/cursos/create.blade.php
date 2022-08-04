@extends('layouts.app')

@section('titulo','Crear curso')

@section('contenido')
    <form action="/curso" method="POST" enctype="multipart/form-data">
        @csrf
        <br>
        <h2>Aqui puedes crear un nuevo curso</h2>
        <div class="form-group">
            <label for="nombre">Nombre del curso</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input id="descripcion" class="form-control" type="text" name="descripcion">
        </div>
        <div class="form-group">
            <label for="duracion">Duración</label>
            <input id="duracion" class="form-control" type="text" name="duracion">
        </div>
        <div class="form-group">
            <label for="imagen">Cargue la imagen del curso</label>
            <br>
            <input id="imagen" class="" type="file" name="imagen">
        </div>
        <button class="btn btn-info" type="submit">Crear</button>
    </form>

@endsection


