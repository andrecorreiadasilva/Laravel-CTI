@extends('layout.site')
@section('titulo','Home')
@section('conteudo')

<div class="row">
    <div class="col s12 m7">
      <div class="card small">
        <div class="card-image">
          <img src="{{ asset('img/aluno.jpg') }}">
          <span class="card-title">Alunos</span>
        </div>
        <div class="card-content">
          <p>O cadastro de alunos permite ter acesso a opcoes de gerenciamento de alunos</p>
        </div>
        <div class="card-action">
          <a href="{{route('admin.alunos')}}">Entrar em alunos</a>
        </div>
      </div>
    </div>
  </div>

<div class="row">
    <div class="col s12 m7">
      <div class="card small">
        <div class="card-image">
          <img src="{{ asset('img/curso.png') }}">
          <span class="card-title">Cursos</span>
        </div>
        <div class="card-content">
          <p>O cadastro de cursos permite ter acesso a opcoes de gerenciamento de cursos</p>
        </div>
        <div class="card-action">
          <a href="{{route('admin.cursos')}}">Entrar em cursos</a>
        </div>
      </div>
    </div>
  </div>

@endsection