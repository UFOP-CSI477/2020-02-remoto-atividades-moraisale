@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Dados da Pessoa</h1>

<div id="show-pessoa">
  <h3 style="text-align: center; margin-top: 10px;">Nome: {{$pessoa->nome}}</h3>
  <h3 style="text-align: center; margin-top: 10px;">Bairro: {{$pessoa->bairro}}</h3>
  <h3 style="text-align: center; margin-top: 10px;">Cidade: {{$pessoa->cidade}}</h3>
  <h3 style="text-align: center; margin-top: 10px;">Data de nascimento: {{$pessoa->data_nascimento}}</h3>

  <div id="btn-show">
    <a class="btn btn-light" style="margin: 5px; width: 45%;" href="{{route('pessoas.edit', $pessoa->id)}}">Editar</a>
    <a class="btn btn-light" style="margin: 5px; width: 45%;" href="{{route('pessoas.index')}}">Voltar</a>
  </div>


  <form name="frmDelete" action="{{route('pessoas.destroy', $pessoa->id)}}" method="post" onsubmit="return confirm('Confirma exclusão da Pessoa?')">

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">
  </form>
</div>




@endsection