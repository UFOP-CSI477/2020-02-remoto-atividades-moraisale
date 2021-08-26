@extends('principal')

@section('conteudo')

<h3 style="text-align: center; margin-top: 20px;">Vacinas</h3>
<div id="tabela-vacinas">
  <table class="table table-bordered table-hover table-striped" style="text-align: center;">

    <tr class="table-light">
      <th>ID <a class="btn btn-light" id="btn-inclusaopt" href="{{route('vacinas.create')}}">&#10010;</a> </th>
      <th>Nome</th>
      <th>Fabricante</th>
      <th>Doses</th>
      <th>Informaçoes</th>
    </tr>
    </thead>

    <tbody>
      @foreach($vacinas as $v)
      <tr>
        <td>{{$v->id}}</td>
        <td>{{$v->nome}}</td>
        <td>{{$v->fabricante}}</td>
        <td>{{$v->doses}}</td>
        <td> <a href="{{route('vacinas.show', $v->id)}}"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square-fill" viewBox="0 0 16 16">
              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <a class="btn btn-light" id="btn-painelvoto" href="{{route('administracao')}}">Voltar</a>

</div>

@endsection