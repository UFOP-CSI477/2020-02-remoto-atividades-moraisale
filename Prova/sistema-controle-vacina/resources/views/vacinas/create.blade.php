@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Cadastro de Vacinas</h1>

<form action="{{route('vacinas.store')}}" method="post" id="form-vacina">
  @csrf

  <div name="cadastrar">

    <div class="form-group">
      <label for="nome" style="margin: 0px 10px;">Nome:</label>
      <input type="text" name="nome" id="nome" class="form-control" style="width: 500px; margin: 0px 10px;">
    </div>

    <div class="form-group">
      <label for="fabricante" style="margin: 0px 10px;">Fabricante:</label>
      <input type="text" name="fabricante" id="fabricante" class="form-control" style="width: 500px; margin: 0px 10px;">
    </div>

    <div class="form-group">
      <label for="doses" style="margin: 0px 10px;">Doses:</label>
      <input type="text" name="doses" id="doses" class="form-control" style="width: 500px; margin: 0px 10px;">
    </div>


    <div id="btn-creatept">
      <input type="submit" value="Cadastrar" class="btn btn-light" style="margin: 10px; width: 20%;">
      <a class="btn btn-light" href="{{route('vacinas.index')}}" style="margin: 10px; width: 20%;">Voltar</a>

    </div>

    @endsection