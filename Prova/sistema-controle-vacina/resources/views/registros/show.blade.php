@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Dados do Registro</h1>

<div id="show-unidade">
  <h3 style="text-align: center; margin-top: 10px;">Nome da pessoa: {{$registro->pessoa_id}}</h3>
  <h3 style="text-align: center; margin-top: 10px;">Unidade aplicada: {{$registro->pessoa_id}}</h3>
  <h3 style="text-align: center; margin-top: 10px;">Vacina aplicada: {{$registro->vacina_id}}</h3>
  <h3 style="text-align: center; margin-top: 10px;">Dose aplicada: {{$registro->dose}}</h3>
  <h3 style="text-align: center; margin-top: 10px;">Data da aplicação: {{$registro->data}}</h3>

  <div id="btn-show">
    <a class="btn btn-light" style="margin: 5px; width: 45%;" href="{{route('registros.edit', $registro->id)}}">Editar</a>
    <a class="btn btn-light" style="margin: 5px; width: 45%;" href="{{route('registros.index')}}">Voltar</a>
  </div>


  <form name="frmDelete" action="{{route('registros.destroy', $registro->id)}}" method="post" onsubmit="return confirm('Confirma exclusão do registro?')">

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">
  </form>
</div>




@endsection