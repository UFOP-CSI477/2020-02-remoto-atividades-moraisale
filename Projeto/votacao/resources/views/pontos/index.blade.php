@extends('principal')

@section('conteudo')


<div id="tabela-pautas">
  <table class="table table-bordered table-hover table-striped" style="text-align: center;">

    <tr class="table-light">
      <th>Nº da pauta <a class="btn btn-light" id="btn-inclusaopt" href="{{route('pontos.create')}}">+</a> </th>
      <th>Descrição</th>
      <th>Tipo</th>
      <th>Informações</th>
    </tr>
    </thead>
    <tbody>

      @foreach($pontos as $p)
      <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->descricao}}</td>
        <td>{{$p->tipo}}</td>
        <td> <a href="{{route('pontos.show', $p->id)}}">Informações e voto</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a class="btn btn-light" id="btn-painelvoto" href="{{route('votos.index')}}">Painel com os votos</a>
</div>



@endsection