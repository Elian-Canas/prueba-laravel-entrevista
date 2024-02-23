<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleado::all();

        return view('empleados.agregar', compact('empleados'));

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
            'nombres' => 'required',
            'p_apellido' => 'required',
            's_apellido' => 'required',
            'cargo_id' => 'required',
            'email' => 'email|required',
            'direccion' => 'required',
            'telefono' => 'required',
            'fecha_ingreso' => 'required',
            'salario' => 'required'
        ]);
        $empleado = new Empleado();
        $empleado->nombres = $request->nombres;
        $empleado->p_apellido = $request->p_apellido;
        $empleado->s_apellido = $request->s_apellido;
        $empleado->cargo_id = $request->cargo_id;
        $empleado->email = $request->email;
        $empleado->direccion = $request->direccion;
        $empleado->telefono = $request->telefono;
        $empleado->fecha_ingreso = $request->fecha_ingreso;
        $empleado->salario = $request->salario;


        if ($empleado->save()) {
            $mensaje = ['resp' => 'Empleado creado correctamente'];
        } else {
            $mensaje = ['resp' => 'Se ha presentado un error'];
        }
        return redirect('empleados')->with($mensaje);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {

        $empleados =  Empleado::all();

        return view('empleados.editar', compact('empleado', 'empleados'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombres' => 'required',
            'p_apellido' => 'required',
            's_apellido' => 'required',
            'cargo_id' => 'required',
            'email' => 'email|required',
            'direccion' => 'required',
            'telefono' => 'required',
            'fecha_ingreso' => 'required',
            'salario' => 'required'
        ]);

        $empleado->nombres = $request->nombres;
        $empleado->p_apellido = $request->p_apellido;
        $empleado->s_apellido = $request->s_apellido;
        $empleado->cargo_id = $request->cargo_id;
        $empleado->email = $request->email;
        $empleado->direccion = $request->direccion;
        $empleado->telefono = $request->telefono;
        $empleado->fecha_ingreso = $request->fecha_ingreso;
        $empleado->salario = $request->salario;


        if ($empleado->save()) {
            $mensaje = ['resp' => 'Empleado actualizado correctamente'];
        } else {
            $mensaje = ['resp' => 'Se ha presentado un error'];
        }
        return redirect('empleados')->with($mensaje);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        if ($empleado->delete()) {
            $mensaje = ['resp' => 'Empleado borrado correctamente'];
        } else {
            $mensaje = ['resp' => 'Se ha presentado un error'];
        }
        return redirect('empleados')->with($mensaje);
    }
}
