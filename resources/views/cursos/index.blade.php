@extends('layouts.app')

@section('titulo','Lista cursos')

@section('contenido')
    <br>
    <h2>Listado de Cursos</h2>

    {{--foreach sirve para iterar arrays--}}

    <div class="row">
        @foreach ($cursito as $item)
        <div class="col">
            <div class="card text-center m-3" style="width: 18rem;">
            <img style="height:150px;" src="{{ Storage::url($item->imagen) }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$item->nombre}}</h5>
                {{-- <p class="card-text">{{$item->descripcion}}</p>
                <p class="card-text">{{$item->duracion}}</p> --}}
                <a href="/curso/{{$item->id}}" class="btn btn-primary">Ver detalle</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>


    {{--las doble llaves sirve para interpolar--}}

@endsection
