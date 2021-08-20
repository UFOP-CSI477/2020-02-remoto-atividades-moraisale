@extends('principal')

@section('conteudo')

<form action="{{route('votos.store')}}" method="post">
  @csrf
  <h1 style="margin: 0px 10px;">Deposite seu voto</h1>


  <div name="cadastrar">


    <div class="form-group" style="margin: 0px 10px;">
      <label for="ponto_id" style="font-weight: bold;">Pauta:</label>
      <select name="ponto_id" id="ponto_id" class="form-control">
        @foreach($pontos as $p)
        <option value="{{$p->id}}">{{$p->id}}</option>
        @endforeach
      </select>

    </div>

    <div class="form-group" style="width: 500px; margin: 0px 10px;">
      <label for="escolha">Voto:</label>
      <select class="form-control" name="escolha" id="escolha">
        <option value="Aprova">Aprova</option>
        <option value="Reprova">Reprova</option>
        <option value="Abstém">Abstém</option>
      </select>

    </div>

    <div>
      <input type="submit" value="Cadastrar" class="btn btn-dark" style="margin: 10px">
      <a class="btn btn-dark" href="{{route('pontos.index')}}" style="margin: 10px">Voltar</a>
    </div>

    @endsection