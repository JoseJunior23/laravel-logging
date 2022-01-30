<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubController;
use App\Http\Controllers\SomaController;
use App\Http\Controllers\ExercicioController;

Route::get('/', function () {
    logger()->debug('Alguém acessou o site');
    logger()->error('Usuario tentou acessar',['user=>2']);
    return view('welcome');
});

Route::get('/soma/{num1}/{num2}', [ExercicioController::class ,'soma']);

Route::get('/sub/{num1}/{num2}',[ExercicioController::class, 'sub']);

Route::get('/div/{num1}/{num2}',[ExercicioController::class, 'divError']);

Route::get('/mult/{num1}/{num2}',[ExercicioController::class, 'multWarning']);
