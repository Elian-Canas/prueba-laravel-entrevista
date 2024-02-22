<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::all();
        return view('cargos.index', compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargos.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'          => 'string|required',
        ]);
        $cargo = new Cargo();
        $cargo->nombre = $request->nombre;

        if ($cargo->save()) {
            $mensaje = ['resp' => 'Cargo creado correctamente'];
        } else {
            $mensaje = ['resp' => 'Se ha presentado un error'];
        }
        return redirect('cargos')->with($mensaje);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        return view('cargos.editar', compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo)
    {
        $request->validate([
            'nombre'          => 'string|required',
        ]);
        $cargo->nombre = $request->nombre;
        if ($cargo->save()) {
            $mensaje = ['resp' => 'Cargo actualizado correctamente'];
        } else {
            $mensaje = ['resp' => 'Se ha presentado un error'];
        }
        return redirect('cargos')->with($mensaje);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        if ($cargo->delete()) {
            $mensaje = ['resp' => 'Cargo borrado correctamente'];
        } else {
            $mensaje = ['resp' => 'Se ha presentado un error'];
        }
        return redirect('cargos')->with($mensaje);
    }
}
