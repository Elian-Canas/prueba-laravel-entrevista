@extends('layouts.master')

@section('titulo', 'Crear Cargo')

@section('content')
    <div class="col-md-12 text-right col-md-offset-3">
        <form role="form" method="POST" class="form-horizontal" action="{{ route('empleados.store') }}">
            <div class="box-body">
                {{ csrf_field() }}


                <div class="form-group">

                    <label for="nombres" class="control-label col-md-3">Nombres</label>
                    <div class="col-md-7" style="margin-bottom: 10px">
                        <input id="nombres" name="nombres" placeholder="" type="text" class="form-control"
                         required>
                    </div>

                    <label for="p_apellido" class="control-label col-md-3">Primer Apellido</label>
                    <div class="col-md-7" style="margin-bottom: 10px">
                        <input id="p_apellido" name="p_apellido" placeholder="" type="text" class="form-control"
                       required>
                    </div>
                    <label for="s_apellido" class="control-label col-md-3">Segundo Apellido</label>
                    <div class="col-md-7" style="margin-bottom: 10px">
                        <input id="s_apellido" name="s_apellido" placeholder="" type="text" class="form-control"
                           required>
                    </div>

                    <label for="cargo_id" class="control-label col-md-3">Cargo</label>
                    <div class="col-md-7" style="margin-bottom: 10px">

                        <select name="cargo_id" class="form-control">
                            <option selected>Seleccione el cargo</option>

                            @foreach ($empleados as $e)
                                <option value="{{ $e->cargo->id }}" aria-placeholder="Seleccione la categoria">
                                    {{ $e->cargo->nombre }} </option>
                            @endforeach
                        </select>
                    </div>


                    <label for="email" class="control-label col-md-3">Email</label>
                    <div class="col-md-7" style="margin-bottom: 10px">
                        <input id="email" name="email" placeholder="" type="email" class="form-control" required>
                    </div>

                    <label for="direccion" class="control-label col-md-3">Direccion</label>
                    <div class="col-md-7" style="margin-bottom: 10px">
                        <input id="direccion" name="direccion" placeholder="" type="text" class="form-control"
                            required>
                    </div>

                    <label for="telefono" class="control-label col-md-3">Telefono</label>
                    <div class="col-md-7" style="margin-bottom: 10px">
                        <input id="telefono" name="telefono" placeholder="" type="number" class="form-control"
                            required>
                    </div>

                    <label for="fecha_ingreso" class="control-label col-md-3">Fecha Ingreso</label>
                    <div class="col-md-7" style="margin-bottom: 10px">
                        <input id="fecha_ingreso" name="fecha_ingreso" placeholder="" type="date" class="form-control"
                             required>
                    </div>

                    <label for="salario" class="control-label col-md-3">Salario</label>
                    <div class="col-md-7" style="margin-bottom: 10px">
                        <input id="salario" name="salario" placeholder="" type="number" class="form-control"
                           required>
                    </div>

                </div>
                <div class="form-group text-center">
                    <a href="{{ route('empleados.index') }}" class="btn btn-default"> Regresar </a>
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
