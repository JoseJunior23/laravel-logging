<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubController;
use App\Http\Controllers\SomaController;

Route::get('/', function () {
    logger()->debug('Alguém acessou o site');
    logger()->error('Usuario tentou acessar',['user=>2']);
    return view('welcome');
});

Route::get('/soma/{num1}/{num2}', [SomaController::class ,'soma']);

Route::get('/sub/{num1}/{num2}',[SubController::class, 'sub']);
