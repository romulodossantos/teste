<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\AutorController;
use App\Http\Controller\Api\ClienteController;

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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('categorias', CategoriaController::class);
Route::resource('livros', LivroController::class);
Route::resource('autores', AutorController::class);
Route::middleware('auth:sanctum')->get('/user',function (Request $request) {
    return $request->user();
});
Route::Resource('clientes', ClienteController::class);