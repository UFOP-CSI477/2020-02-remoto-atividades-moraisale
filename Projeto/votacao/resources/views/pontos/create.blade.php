@extends('principal')

@section('conteudo')

<form action="{{route('pontos.store')}}" method="post" id="form-pauta">
  @csrf
  <h1 style="margin: 0px 10px;">Cadastro de novos pontos para a Assembléia</h1>
  <div name="cadastrar">

    <div class="form-group">
      <label for="descricao" style="margin: 0px 10px; font-weight: bold;">Descreva a pauta a ser inserida:</label>
      <input type="text" name="descricao" id="descricao" class="form-control" style="width: 500px; margin: 0px 10px;">
    </div>

    <div class="form-group" style="width: 500px; margin: 0px 10px;">
      <label for="tipo">Tipo de pauta</label>
      <select class="form-control" name="tipo" id="tipo">
        <option value="Discussão">Discussão</option>
        <option value="Apreciação">Apreciação</option>
        <option value="Aprovação">Aprovação</option>
      </select>

    </div>

    <div>
      <input type="submit" value="Cadastrar" class="btn btn-dark" style="margin: 10px">
      <a class="btn btn-dark" href="{{route('pontos.index')}}" style="margin: 10px">Voltar</a>

    </div>

    @endsection