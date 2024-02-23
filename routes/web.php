<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::resource('cargos', 'CargoController');

Route::resource('empleados', 'EmpleadoController');