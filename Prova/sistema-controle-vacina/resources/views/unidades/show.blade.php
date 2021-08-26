@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Dados da Unidade</h1>

<div id="show-unidade">
  <h3 style="text-align: center; margin-top: 10px;">Nome: {{$unidade->nome}}</h3>
  <h3 style="text-align: center; margin-top: 10px;">Bairro: {{$unidade->bairro}}</h3>
  <h3 style="text-align: center; margin-top: 10px;">Cidade: {{$unidade->cidade}}</h3>

  <div id="btn-show">
    <a class="btn btn-light" style="margin: 5px; width: 45%;" href="{{route('unidades.edit', $unidade->id)}}">Editar</a>
    <a class="btn btn-light" style="margin: 5px; width: 45%;" href="{{route('unidades.index')}}">Voltar</a>
  </div>


  <form name="frmDelete" action="{{route('unidades.destroy', $unidade->id)}}" method="post" onsubmit="return confirm('Confirma exclusão da unidade?')">

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">
  </form>
</div>




@endsection