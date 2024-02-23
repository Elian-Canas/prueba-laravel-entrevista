@extends('layouts.master')

@section('titulo', 'Listado de Empleados')

@section('content')
<div class="col-md-12 text-center">
    <div class="col-md-6">
        @if(session('resp'))
        <div class="alert alert-info text-center">
            {{ session('resp') }}
        </div>
        @endif
    </div>
    <a class="btn btn-success" href="{{ route('empleados.create') }}">
        Nuevo Empleado
    </a>
</div>
<div class="col-md-5 text-center">
    <table class="table table-bordered" style="margin-top:10px">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Nombres</th>
                <th class="text-center">Primer Apellido</th>
                <th class="text-center">Segundo Apellido</th>
                <th class="text-center">Cargo</th>
                <th class="text-center">Email</th>
                <th class="text-center">Direccion</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Fecha Ingreso</th>
                <th class="text-center">Salario</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td>{{ $e->nombres }}</td>
                <td>{{ $e->p_apellido }}</td>
                <td>{{ $e->s_apellido }}</td>
                <td>{{ $e->cargo->nombre }}</td>
                <td>{{ $e->email }}</td>
                <td>{{ $e->direccion }}</td>
                <td>{{ $e->telefono }}</td>
                <td>{{ $e->fecha_ingreso }}</td>
                <td>{{ $e->salario }}</td>

                <td><a href="{{ route('empleados.edit', $e) }}" class="btn btn-warning">Editar</a></td>
                <td>
                    <form action="{{ route('empleados.destroy', $e) }}" method="POST" accept-charset="utf-8">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete" />
                        <button class="btn btn-danger" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>


</div>
@endsection