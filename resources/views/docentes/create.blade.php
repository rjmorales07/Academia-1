@extends('layouts.app')

@section('titulo','Crear Docente')

@section('contenido')
<form action="/docente" method="POST" enctype="multipart/form-data">
    @csrf
    <br>
    <h2>Aqui Te Puedes Registrar</h2>
    <div class="form-group">
        <label for="nombre">Nombres</label>
        <input id="nombre" class="form-control" type="text" name="nombre">
    </div>
    <div class="form-group">
        <label for="apellido">Apellidos</label>
        <input id="apellido" class="form-control" type="text" name="apellido">
    </div>
    <div class="form-group">
        <label for="titulouniv">Titulo Universitario</label>
        <input id="titulouniv" class="form-control" type="text" name="titulouniv">
    </div>
    <div class="form-group">
        <label for="edad">edad</label>
        <input id="edad" class="form-control" type="number" name="edad">
    </div>
    <div class="form-group">
        <label for="fecha">Fecha de Contrato</label>
        <input id="fecha" class="form-control" type="date" name="fecha">
    </div>
    <div class="form-group">
        <label for="foto">Cargue la imagen </label>
        <br>
        <input id="foto" class="" type="file" name="foto">
    </div>
    <div class="form-group">
        <label for="documento">Documento de identidad</label>
        <br>
        <input id="documento" class="" type="file" name="documento">
    </div>
    <button class="btn btn-info" type="submit">Registrar</bu*tton>
</form>

@endsection
