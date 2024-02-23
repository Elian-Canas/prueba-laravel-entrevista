@extends('layouts.master')

@section('titulo', 'Editar Cargo')

@section('content')
<div class="col-md-12 text-right">

    <form role="form" method="POST" class="form-horizontal" action="{{ route('cargos.update', $cargo) }}">
        <div class="box-body">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="form-group">
                <label for="nombre" class="control-label col-md-3">Nombre del cargo</label>
                <div class="col-md-7">
                    <input id="nombre" name="nombre" placeholder="" type="text" class="form-control" value="{{ $cargo->nombre }}" required>
                </div>
            </div>
            <div class="form-group text-center">
                <a href="{{ route('cargos.index') }}" class="btn btn-default"> Regresar </a>
                <button name="submit" type="submit" class="btn btn-primary">Guardar</button>

            </div>

            <div class="form-group col-md-6 text-center">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>


    </form>
</div>
@endsection
