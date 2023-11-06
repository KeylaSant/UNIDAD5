<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/suma/{num1}/{num2}', function ($num1, $num2) {
    return $num1 + $num2;
});

Route::get('/resta/{num1}/{num2}', function ($num1, $num2) {
    return $num1 - $num2;
});

Route::get('/multi/{num1}/{num2}', function ($num1, $num2) {
    return $num1 * $num2;
});

Route::get('/division/{num1}/{num2}', function ($num1, $num2) {
    return $num1 / $num2;
});

Route::get('/saludo/{nombre}/{apellido?}', function ($nombre, $apellido = "Doe") {
    return "Hola ".$nombre." ".$apellido;
});

Route::get('/greeting/{nombre?}', function ($nombre = "John") {
    return view('saludo', ['name' => $nombre]);
});
