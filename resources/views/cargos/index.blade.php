@extends('layouts.master')

@section('titulo', 'Listado de cargos')

@section('content')
<div class="col-md-12 text-right">
    <div class="col-md-6">
        @if(session('resp'))
        <div class="alert alert-info text-center">
            {{ session('resp') }}
        </div>
        @endif
    </div>
    <a class="btn btn-success" href="{{ route('cargos.create') }}">
        Crear Cargo
    </a>
</div>
<div class="col-md-12 text-right">
    <table class="table table-bordered" style="margin-top:10px">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Nombre del cargo</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cargos as $cargo)
            <tr>
                <td>{{ $cargo->id }}</td>
                <td>{{ $cargo->nombre }}</td>
                <td><a href="{{ route('cargos.edit', $cargo) }}" class="btn btn-warning">Editar</a></td>
                <td>
                    <form action="{{ route('cargos.destroy', $cargo) }}" method="POST" accept-charset="utf-8">
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