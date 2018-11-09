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

//Seção 5 - Aula 14 - Parâmetros opcionais e restritos

Route::get('/olausuariocomregra/repetir/{nome}/{n}', function($nome, $n){
    for ($i = 1; $i < $n; $i++){
        echo 'Ola '. $nome.' '. $i . '.<br>';
    }
})->where('n', '[0-9]+');

//Seção 5 - Aula 15 - Agrupamento de rotas

Route::prefix('app')->group(function(){
    Route::get('/', function(){
        return 'Página Principal do app.';
    });
    Route::get('profile', function(){
        return 'Página Profile.';
    });
    Route::get('about', function(){
        return 'Página about';
    });
});