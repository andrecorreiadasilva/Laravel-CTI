<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoControllerApi extends Controller
{
    public function store(Request $req)
    {
        $novoCurso = Curso::create($req->all());

        // É uma boa prática que o STORE devolva o registro em JSON com código HTTP 201
        return response($novoCurso, 201);
    }

    public function index()
    {
        return Curso::all();
    }

    public function show($id)
    {
        $curso = Curso::find($id);

        if ($curso !== null) {
            // Status HTTP 200 se OK
            return response($curso, 200);
        } else {
            // 404 se não encontrou
            return response('', 404);
        }
    }

    public function update(Request $req, $id)
    {
        $curso = Curso::find($id);

        if ($curso && $curso->update($req->all())) {
            return response('OK', 200);
        } else {
            return response('', 404);
        }
    }

    public function destroy($id)
    {
        $cursoEncontrado = Curso::find($id);

        if ($cursoEncontrado) {
            if ($cursoEncontrado->delete()) {
                return response('OK', 200);
            } else {
                return response('', 400);
            }
        } else {
            return response('', 404);
        }
    }
}