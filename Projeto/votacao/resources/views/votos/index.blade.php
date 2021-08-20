@extends('principal')

@section('conteudo')

<div id="tabela-votos">
  <table class="table table-bordered table-hover table-striped" style="text-align: center;">
    <thead>
      <tr class="table-light">
        <th>Nº da pauta</th>
        <th>Seu voto</th>
        <th>Editar voto</th>

      </tr>
    </thead>
    <tbody>

      @foreach($votos as $v)
      <tr>
        <td>{{$v->ponto_id}}</td>
        <td>{{$v->escolha}}</td>
        <td> <a href="{{route('votos.show', $v->id)}}">Edite seu voto</a></td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection