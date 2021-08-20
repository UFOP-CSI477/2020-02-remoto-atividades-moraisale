@extends('principal')

@section('conteudo')

<h1>Informações sobre o voto</h1>


<h3>Nº identificador da pauta: {{$voto->ponto_id}}</h3>
<h3>Voto: {{$voto->escolha}}</h3>


<a class="btn btn-dark" href="{{route('votos.edit', $voto->id)}}">Editar</a>
<a class="btn btn-dark" href="{{route('votos.index')}}">Voltar</a>

<form name="frmDelete" action="{{route('votos.destroy', $voto->id)}}" method="post" onsubmit="return confirm('Confirma exclusão da pauta?')">

  @csrf
  @method('DELETE')

  <input class="btn btn-danger" type="submit" value="Excluir">
</form>

@endsection