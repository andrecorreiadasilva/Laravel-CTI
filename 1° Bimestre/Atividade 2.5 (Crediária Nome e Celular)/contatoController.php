<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    public function index(Request $req){
        $reqNome = $req['nome'];
        $reqCelular = $req['celular'];
        $contatos = [['nome'=>$reqNome, 'celular'=>$reqCelular]];
        return view("contatos.index", compact('contatos'));
    }
}
