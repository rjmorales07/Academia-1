@extends('layouts.app')

@section('titulo', 'Detalles Docentes')

@section('contenido')
<div class="text-center">
    <div class="m-auto">
        <img style="height: 50px; width:50px;" class="card-img-top" src="{{ Storage::url($docentico->foto) }} " alt="Card image cap">
        <p class="text-center">Nombre: {{$docentico->nombre}}</p>
        <p class="text-center">Apellido: {{$docentico->apellido}}</p>
        <p class="text-center">Edad: {{$docentico->edad}}</p>
        <p class="text-center">Titulo Universitario: {{$docentico->titulouniv}}</p>
        <iframe src="{{Storage::url($docentico->documento)}}" width="300px" height="300px"></iframe>
        <br>
        <br>
        <a href="/docente/{{$docentico->id}}/edit" class="btn btn-success">Editar Docente</a>
        <br>
        <br>

            <form class="form-group" action="/docente/{{$docentico->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
    </div>
</div>
@endsection
