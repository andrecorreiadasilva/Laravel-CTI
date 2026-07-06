<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CursoControllerApi;

Route::ApiResource('curso',
'App\Http\Controllers\api\CursoControllerApi');
