<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    public function index(Request $req){
        $dadosAluno = array(['nome'=>$req['nome'], 'cel'=>$req['cel']]);
        return view('contato', compact('dadosAluno'));
    }
}
