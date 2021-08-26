@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Dados da Vacina</h1>

<div id="show-vacina">
  <h3 style="text-align: center; margin-top: 10px;">Nome: {{$vacina->nome}}</h3>
  <h3 style="text-align: center; margin-top: 10px;">Fabricante: {{$vacina->fabricante}}</h3>
  <h3 style="text-align: center; margin-top: 10px;">Nº de doses: {{$vacina->doses}}</h3>

  <div id="btn-show">
    <a class="btn btn-light" style="margin: 5px; width: 45%;" href="{{route('vacinas.edit', $vacina->id)}}">Editar</a>
    <a class="btn btn-light" style="margin: 5px; width: 45%;" href="{{route('vacinas.index')}}">Voltar</a>
  </div>


  <form name="frmDelete" action="{{route('vacinas.destroy', $vacina->id)}}" method="post" onsubmit="return confirm('Confirma exclusão da vacina?')">

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">
  </form>
</div>




@endsection