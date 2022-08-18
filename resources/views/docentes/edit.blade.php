@extends('layouts.app')

@section('titulo','Editar Docente')

@section('contenido')
<form action="/docente/{{$docentico->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <br>
    <br>
    <br>
        <h2>Actualizar información del docente</h2>
        <div class="form-group">
            <label for="nombre">Nombres del docente</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="apellido">Apellidos del Docente</label>
            <input id="apellido" class="form-control" type="text" name="apellido">
        </div>
        <div class="form-group">
            <label for="titulouniv">Título Universitario</label>
            <input id="titulouniv" class="form-control" type="text" name="titulouniv">
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input id="edad" class="form-control" type="text" name="edad">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha del contrato</label>
            <input id="fecha" class="form-control" type="date" name="fecha">
        </div>
        <div class="form-group">
            <label for="documento">Documento de identidad</label>
            <br>
            <iframe src="{{Storage::url($docentico->documento)}}" width="300px" height="300px"></iframe>
            <br>
            <input id="documento" class="form-control" type="file" name="documento">
        </div>
        <div class="form-group">
            <label for="foto" class="form-label">Cargue la foto del docente</label>
            <br>
            <img style="height: 50px; width:50px;" class="card-img-top" src="{{ Storage::url($docentico->foto) }} " alt="Card image cap">
            <br>
            <input id="foto" class="form-control" type="file" name="foto">
        </div>
        <button class="btn btn-info" type="submit">Actualizar Docente</button>
    </div>
</form>
