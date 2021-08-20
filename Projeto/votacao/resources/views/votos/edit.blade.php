@extends('principal')

@section('conteudo')

<form action="{{route('votos.update', $voto->id )}}" method="post">

  @csrf
  @method('PUT')

  <h1>Editar voto</h1>

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