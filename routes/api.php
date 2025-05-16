<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\SocioController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/libro/get', [LibroController::class, 'getLibros']);
Route::get('/libro/get/{id}', [LibroController::class, 'getLibro']);
Route::post('/libro/create', [LibroController::class, 'createLibro']);
Route::put('/libro/update/{id}', [LibroController::class, 'updateLibro']);
Route::delete('/libro/delete/{id}', [LibroController::class, 'borrarLibro']);

Route::get('/socios', [SocioController::class, 'getAllSocios']);
