<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/simples', [App\Http\Controllers\SimplesController::class, 'simplesFunc']);

Route::get(
    '/{nome}/{cat_id}',
    function (
        string $nome,
        int $cat_id = 1
    ){
        echo("parametros: $nome - $cat_id");
    } // expressões regulares
)->where('cat_id', '[0-9]+')->where('nome', '[a-zA-Z]+');

Route::get('/resultado', [App\Http\Controllers\ResultadoController::class, 'res']);
