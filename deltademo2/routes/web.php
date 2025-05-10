<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/productos', [App\Http\Controllers\productosController::class, 'index']);
Route::get('/crear', [App\Http\Controllers\productosController::class, 'crear']);
Route::post('/dataformulario', [App\Http\Controllers\productosController::class, 'dataformulario'])->name('productos.formdata');
Route::get('/app', [App\Http\Controllers\productosController::class, 'app']);
Route::get('/home', [App\Http\Controllers\productosController::class, 'home']);
Route::get('/pdf', [App\Http\Controllers\productosController::class, 'getPDF'])->name('productos.pdf');



