@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Cadastro de Unidades</h1>

<form action="{{route('unidades.store')}}" method="post" id="form-unidade">
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

    <div id="btn-creatept">
      <input type="submit" value="Cadastrar" class="btn btn-light" style="margin: 10px; width: 20%;">
      <a class="btn btn-light" href="{{route('unidades.index')}}" style="margin: 10px; width: 20%;">Voltar</a>

    </div>

    @endsection