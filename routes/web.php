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

//Seção 5 - Aula 12

Route::get('/', function () {
    return view('welcome');
});

Route::get('/olamundo', function () {
    echo '<h1>Olá Mundo!</h1>';
});

//Seção 5 - Aula 13

Route::get('/olausuario/{nome}', function ($nome) {
    echo 'Olá '.$nome.'! Seja bem-vindo!';
});

Route::get('/olausuario/repetir/{nome}/{n}', function($nome, $n){
    for ($i = 0; $i < $n; $i++){
        echo 'Ola '. $nome. '.<br>';
    }
});