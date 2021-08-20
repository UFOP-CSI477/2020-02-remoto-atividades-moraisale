@extends('principal')

@section('conteudo')

<form action="{{route('pontos.update', $ponto->id )}}" method="post">

  @csrf
  @method('PUT')

  <h1>Editar dados da pauta</h1>

  <div class="row-2">
    <label for="numero">Nº identificador</label>
    <input type="text" class="form-control" name="numero" id="numero" value="{{ $ponto->id }}">
  </div>


  <div class="row-2">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" name="descricao" id="descricao" value="{{ $ponto->descricao }}">
  </div>

  <div class="row-2">
    <label for="tipo">Tipo</label>
    <select class="form-control" name="tipo" id="tipo">
      <option value="Discussão">Discussão</option>
      <option value="Apreciação">Apreciação</option>
      <option value="Aprovação">Aprovação</option>
    </select>
  </div>

  <div>
    <input type="submit" value="Atualizar" class="btn btn-dark">
  </div>
</form>
@endsection