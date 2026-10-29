<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
Route::get('/', function () {
 return view('welcome');
});
// Ruta que pide el enunciado
Route::get('/libros', [LibroController::class, 'index']);

