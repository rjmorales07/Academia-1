@extends('layouts.app')

@section('titulo', 'detalle curso')

@section('contenido')

    <div class="m-auto">
        <div class="text-center">
            <img style="height:250px; width:310px;" src="{{Storage::url($cursito->imagen) }}" class="card-img-top" alt="...">
            <p class="card-text">{{$cursito->descripcion}}</p>
            <p class="card-text">{{$cursito->duracion}}</p>
            <a href="/curso/{{$cursito->id}}/edit" class="btn btn-primary">Editar</a>
            <br>
            <br>
        <form class="form-group" action="/curso/{{$cursito->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
    </div>

@endsection
