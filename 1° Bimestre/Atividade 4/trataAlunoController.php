<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trataAlunoController extends Controller
{
    public function index($nomeAluno = 'Todos'){
        echo "Nome do aluno: $nomeAluno";
    }
}
