<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use App\Http\Requests\storeDocenteRequest;


class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentico = Docente::all();
        return view('docentes.index', compact('docentico'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeDocenteRequest $request)
    {
        $docentico = new Docente();//crear una instancia de la clase Docente
        $docentico->nombre=$request->input('nombre');
        $docentico->apellido=$request->input('apellido');
        $docentico->titulouniv=$request->input('titulouniv');
        $docentico->edad=$request->input('edad');
        $docentico->fecha=$request->input('fecha');
        if($request->hasFile('foto','documento',)){
            $docentico->foto = $request->file('foto')->store('public/docente');
            $docentico->documento=$request->file('documento')->store('public/docente');
        }

        $docentico->save();
        return view('docentes.save');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docentico = Docente::find($id);
        return view('docentes.show', compact('docentico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docentico = Docente::find($id);
        return view('docentes.edit', compact('docentico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $docentico = Docente::find($id);
        $docentico->fill($request->except('foto'));
        if($request->hasFile('foto')){
            $docentico->foto = $request->file('foto')->store('public/docente');
            $docentico->documento = $request->file('documento')->store('public/docente');
        }
        $docentico->save();
        return view('docentes.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docentico = Docente::find($id);
        $urlImagenBD = $docentico->foto;
        $nombreImagen = str_replace('public/', '\storage\\', $urlImagenBD);
        $rutaCompleta = public_path(). $nombreImagen;
        unlink($rutaCompleta);
        $docentico -> delete();
        return view('docentes.delete');
    }
}
