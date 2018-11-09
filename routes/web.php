<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/olamundo', function () {
    echo '<h1>Olá Mundo!</h1>';
});

Route::get('/olausuario', function () {
    echo 'Olá usuário! Seja bem-vindo!';
});