@extends('principal')

@section('conteudo')

<div id="show-pauta">
  <h1>Dados da pauta inserida</h1>

  <h3>Nº identificador: {{$ponto->id}}</h3>
  <h3>Descrição: {{$ponto->descricao}}</h3>
  <h3>Tipo: {{$ponto->tipo}}</h3>

  <div id="btn-show">
    <a class="btn btn-dark" href="{{route('pontos.edit', $ponto->id)}}">Editar</a>
    <a class="btn btn-dark" href="{{route('votos.create', $ponto->id)}}">Votar</a>
    <a class="btn btn-dark" href="{{route('pontos.index')}}">Voltar</a>
  </div>


  <form name="frmDelete" action="{{route('pontos.destroy', $ponto->id)}}" method="post" onsubmit="return confirm('Confirma exclusão da pauta?')">

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">
  </form>
</div>




@endsection