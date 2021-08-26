@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Cadastro de Pessoas</h1>

<form action="{{route('pessoas.store')}}" method="post" id="form-pessoa">
  @csrf

  <div name="cadastrar">

    <div class="form-group">
      <label for="nome" style="margin: 0px 10px;">Nome:</label>
      <input type="text" name="nome" id="nome" class="form-control" style="width: 500px; margin: 0px 10px;">
    </div>

    <div class="form-group">
      <label for="bairro" style="margin: 0px 10px;">Bairro:</label>
      <input type="text" name="bairro" id="bairro" class="form-control" style="width: 500px; margin: 0px 10px;">
    </div>

    <div class="form-group">
      <label for="cidade" style="margin: 0px 10px;">Cidade:</label>
      <input type="text" name="cidade" id="cidade" class="form-control" style="width: 500px; margin: 0px 10px;">
    </div>

    <div class="form-group">
      <label for="data_nascimento" style="margin: 0px 10px;">Data de nascimento:</label>
      <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" style="width: 500px; margin: 0px 10px;">
    </div>


    <div id="btn-creatept">
      <input type="submit" value="Cadastrar" class="btn btn-light" style="margin: 10px; width: 20%;">
      <a class="btn btn-light" href="{{route('pessoas.index')}}" style="margin: 10px; width: 20%;">Voltar</a>

    </div>

    @endsection