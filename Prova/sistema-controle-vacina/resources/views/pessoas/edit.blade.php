@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Editar dados da Pessoa</h1>

<form action="{{route('pessoas.update', $pessoa->id )}}" method="post" id="edit-unidade">

  @csrf
  @method('PUT')

  <div class="row-2">
    <label for="nome" style="margin-left: 10px;">Nome:</label>
    <input type="text" class="form-control" name="nome" id="nome" style="width: 500px; margin: 0px 10px;" value="{{ $pessoa->nome }}">
  </div>

  <div class="row-2">
    <label for="bairro" style="margin-left: 10px;">Bairro:</label>
    <input type="text" class="form-control" name="bairro" id="bairro" style="width: 500px; margin: 0px 10px;" value="{{ $pessoa->bairro }}">
  </div>

  <div class="row-2">
    <label for="cidade" style="margin-left: 10px;">Cidade:</label>
    <input type="text" class="form-control" name="cidade" id="cidade" style="width: 500px; margin: 0px 10px;" value="{{ $pessoa->cidade }}">
  </div>

  <div class="row-2">
    <label for="data_nascimento" style="margin-left: 10px;">Data de nascimento:</label>
    <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" style="width: 500px; margin: 0px 10px;" value="{{ $pessoa->data_nascimento }}">
  </div>


  <div id="btn-editpt">
    <input type="submit" style="margin: 5px; width: 90%;" value="Atualizar" class="btn btn-light">
    <a class="btn btn-light" style="margin: 5px; width: 80%;" href="{{route('pessoas.show',  $pessoa->id)}}">Voltar</a>

  </div>
</form>
@endsection