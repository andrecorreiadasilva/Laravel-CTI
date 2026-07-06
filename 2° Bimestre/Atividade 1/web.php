<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/cursos',
['as'  =>'admin.cursos',
 'uses'=>'App\Http\Controllers\admin\cursoController@index']);

Route::get('/admin/cursos/adicionar',
['as'  =>'admin.cursos.adicionar',
 'uses'=>'App\Http\Controllers\admin\cursoController@adicionar']);

Route::post('/admin/cursos/salvar',
['as'  =>'admin.cursos.salvar',
 'uses'=>'App\Http\Controllers\admin\cursoController@salvar']);

Route::get('/admin/cursos/editar/{id}',
['as'  =>'admin.cursos.editar',
 'uses'=>'App\Http\Controllers\admin\cursoController@editar']);

Route::put('/admin/cursos/atualizar/{id}',
['as'  =>'admin.cursos.atualizar',
 'uses'=>'App\Http\Controllers\admin\cursoController@atualizar']);

Route::get('/admin/cursos/excluir/{id}',
['as'  =>'admin.cursos.excluir',
 'uses'=>'App\Http\Controllers\admin\cursoController@excluir']);

Route::put('/admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar',
'uses'=>'App\Http\Controllers\Admin\CursoController@atualizar']);