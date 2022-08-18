@extends('layouts.app')

@section('titulo','Lista Docentes')

@section('contenido')
<br>
<br>
<br>
<h2>Listado de docentes</h2>

<div class="row">
    @foreach ($docentico as $item)
            <div class="col-sm">
                <div class="card text-center m-3" style="width: 18rem;">
                    <img style="height: 150px" class="card-img-top" src="{{ Storage::url($item->foto) }}
                    " alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->nombre}}</h5>
                        <a href="/docente/{{$item->id}}" class="btn btn-primary">Ver Detalles del docente</a>
                    </div>
                </div>
            </div>
    @endforeach
</div>
