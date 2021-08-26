@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Editar dados da vacina</h1>

<form action="{{route('vacinas.update', $vacina->id )}}" method="post" id="edit-vacina">

  @csrf
  @method('PUT')

  <div class="row-2">
    <label for="nome" style="margin-left: 10px;">Nome:</label>
    <input type="text" class="form-control" name="nome" id="nome" style="width: 500px; margin: 0px 10px;" value="{{ $vacina->nome }}">
  </div>

  <div class="row-2">
    <label for="fabricante" style="margin-left: 10px;">Fabricante:</label>
    <input type="text" class="form-control" name="fabricante" id="fabricante" style="width: 500px; margin: 0px 10px;" value="{{ $vacina->fabricante }}">
  </div>

  <div class="row-2">
    <label for="doses" style="margin-left: 10px;">Doses:</label>
    <input type="text" class="form-control" name="doses" id="doses" style="width: 500px; margin: 0px 10px;" value="{{ $vacina->doses }}">
  </div>


  <div id="btn-editpt">
    <input type="submit" style="margin: 5px; width: 90%;" value="Atualizar" class="btn btn-light">
    <a class="btn btn-light" style="margin: 5px; width: 80%;" href="{{route('vacinas.show',  $vacina->id)}}">Voltar</a>

  </div>
</form>
@endsection