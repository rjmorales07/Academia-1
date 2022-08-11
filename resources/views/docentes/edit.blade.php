@extends('layouts.app')

@section('titulo','Editar Docente')

@section('contenido')
<form action="/curso/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <br>
        <h2>Aqui puedes editar tu curso</h2>
        <div class="form-group">
            <label for="nombre">Edita el nombre</label>
            <input id="nombre" class="form-control" type="text" name="nombre" value="{{$cursito->nombre}}">
        </div>
        <div class="form-group">
            <label for="descripcion"> edita la Descripción</label>
            <input id="descripcion" class="form-control" type="text" name="descripcion" value="{{$cursito->descripcion}}">
        </div>
        <div class="form-group">
            <label for="duracion">edita la  Duración</label>
            <input id="duracion" class="form-control" type="text" name="duracion" value="{{$cursito->duracion}}">
        </div>
        <div class="form-group">
            <label for="imagen">Cargue la nueva imagen del curso</label>
            <br>
            <div>
            <img style="height:150px; width:150px;" src="{{Storage::url($cursito->imagen) }}" class="card-img-top" alt="...">
            </div>
            <br>
            <input id="imagen" type="file" name="imagen">
        </div>
        <button class="btn btn-info" type="submit">Actualizar</button>
    </form>
@endsection
