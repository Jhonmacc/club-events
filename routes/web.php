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
use App\Http\Controllers\EventosController;

Route::get('/', [EventosController::class, 'index']);
Route::get('/eventos/create', [EventosController::class, 'create']);



Route::get('/contatos', function () {
    return view('contatos');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('produtos', ['busca' => $busca]);
});
Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('produto', ['id' => $id]);
});
