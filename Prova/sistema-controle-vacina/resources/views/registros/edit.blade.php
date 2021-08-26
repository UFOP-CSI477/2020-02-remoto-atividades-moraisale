@extends('principal')

@section('conteudo')

<h1 style="text-align: center; margin-top: 20px;">Editar dados do registro</h1>

<form action="{{route('registros.update', $registro->id )}}" method="post" id="edit-unidade">

  @csrf
  @method('PUT')

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

  <div id="btn-editpt">
    <input type="submit" style="margin: 5px; width: 90%;" value="Atualizar" class="btn btn-light">
    <a class="btn btn-light" style="margin: 5px; width: 80%;" href="{{route('registros.show',  $registro->id)}}">Voltar</a>

  </div>
</form>
@endsection