@extends('principal')

@section('conteudo')

<div id="tabela1">
  @csrf
  <table class="table table-bordered table-hover table-striped" style="text-align: center;">

    <thead>
      <th><b>Aplicação</b></th>
      <th><b>Quantidade</b> </th>
    </thead>

    <tbody>

      <tr>
        <td><b>Dose única</b> </td>
        <td></td>
      </tr>
      <tr>
        <td><b>Primeira dose</b> </td>
        <td></td>
      </tr>
      <tr>
        <td><b>Segunda dose</b></td>
        <td></td>
      </tr>
      <tr>
        <td><b>TOTAL GERAL</b></td>
        <td></td>
      </tr>

    </tbody>

  </table>
</div>

</div>

<div id="tabela2">
  @csrf
  <table class="table table-bordered table-hover table-striped" style="text-align: center;">
    <thead>
      <th>Vacina</th>
      <th>Quantidade</th>
      <th>Porcentagem</th>
    </thead>

    <tbody>

      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>


      <tr>
        <td><b>TOTAL GERAL</b></td>
        <td></td>
      </tr>

    </tbody>

  </table>
</div>

</div>
</div>
</div>

@endsection