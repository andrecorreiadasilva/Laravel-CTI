<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contato', ['uses'=>'app/Http/Controllers/contatoController@index']);

Route::get('/aluno/{nomeAluno?}', ['uses'=>'app/Http/Controllers/trataAlunoController@index']);
