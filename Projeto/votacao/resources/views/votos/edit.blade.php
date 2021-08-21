@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Editar voto</h1>

<form action="{{route('votos.update', $voto->id )}}" method="post" id="edit-voto">

  @csrf
  @method('PUT')

  <div class="row-2">
    <label for="tipo" style="margin-left: 10px;">Tipo:</label>
    <select class="form-control" name="tipo" id="tipo" style="width: 500px; margin: 0px 10px; margin-bottom: 10px;">
      <option value="Discussão">Discussão</option>
      <option value="Apreciação">Apreciação</option>
      <option value="Aprovação">Aprovação</option>
    </select>
  </div>

  <div>
    <input type="submit" value="Atualizar" class="btn btn-light">
  </div>
</form>
@endsection