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

use Illuminate\Http\Request;

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

//Seção 5 - Aula 16 - Redirecionamento

Route::redirect('/aqui', '/ola', 301);

Route::view('/viewnome', 'hellonome',
            ['nome'=> 'Juan', 'sobrenome'=> 'Barata']);

Route::get('/hellonome/{nome}/{sobrenome}', function($nome, $sn){
    return view('hellonome',
            ['nome' => $nome,
            'sobrenome' => $sn]);
});

//Seção 5 - Aula 18 - HTTP - Parte 2

Route::get('/rest/hello', function(){
    return 'Hello {GET}';
});

Route::post('/rest/hello', function(){
    return 'Hello {POST}';
});

Route::delete('/rest/hello', function(){
    return 'Hello {DELETE}';
});

Route::put('/rest/hello', function(){
    return 'Hello {PUT}';
});

Route::patch('/rest/hello', function(){
    return 'Hello {PATCH}';
});

Route::options('/rest/hello', function(){
    return 'Hello {OPTIONS}';
});

//Seção 5 - Aula 18 - HTTP - Parte 3

Route::post('/rest/imprimir', function(Request $request){
    $nome = $request->input('nome');
    $idade = $request->input('idade');
    return "Bem vindo, $nome! Você tem $idade anos de idade.";
});

//Seção 5 - Aula 18 - HTTP - Parte 4

Route::match(['get', 'post'],'/rest/hello2', function(){
    return "Hello world 2.";
});