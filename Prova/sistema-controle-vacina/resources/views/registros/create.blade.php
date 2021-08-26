@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Cadastro de Registros</h1>

<form action="{{route('registros.store')}}" method="post" id="form-registro">
  @csrf

  <div name="cadastrar">

    <div class="form-group">
      <label for="pessoa_id" style="margin-left: 10px;">Pessoa aplicada:</label>
      <select name="pessoa_id" id="pessoa_id" class="form-control" style="width: 500px; margin: 0px 10px;">
        @foreach($pessoas as $p)
        <option value="{{$p->id}}">{{$p->nome}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="unidade_id" style="margin-left: 10px;">Unidade aplicada:</label>
      <select name="unidade_id" id="unidade_id" class="form-control" style="width: 500px; margin: 0px 10px;">
        @foreach($unidades as $u)
        <option value="{{$u->id}}">{{$u->nome}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="vacina_id" style="margin-left: 10px;">Vacina aplicada:</label>
      <select name="vacina_id" id="vacina_id" class="form-control" style="width: 500px; margin: 0px 10px;">
        @foreach($vacinas as $v)
        <option value="{{$v->id}}">{{$v->nome}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="dose" style="margin: 0px 10px;">Dose recebida:</label>
      <input type="text" name="dose" id="dose" class="form-control" style="width: 500px; margin: 0px 10px;">
    </div>

    <div class="form-group">
      <label for="data" style="margin: 0px 10px;">Data da aplicação</label>
      <input type="date" name="data" id="data" class="form-control" style="width: 500px; margin: 0px 10px;">
    </div>


    <div id="btn-creatept">
      <input type="submit" value="Cadastrar" class="btn btn-light" style="margin: 10px; width: 20%;">
      <a class="btn btn-light" href="{{route('registros.index')}}" style="margin: 10px; width: 20%;">Voltar</a>

    </div>

    @endsection