<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/estudiantes', [EstudianteController::class, 'index']);
