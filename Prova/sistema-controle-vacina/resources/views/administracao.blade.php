@extends('principal')

@section('conteudo')

<div id="logos-btn">
  <a href="{{route('vacinas.index')}}"> <img src=" {{asset('imagens/iconevacina.png')}}" alt="" id="img-adm"> </a>
  <a href="{{route('pessoas.index')}}"> <img src=" {{asset('imagens/pessoas.png')}}" alt="" id="img-adm"></a>
  <a href="{{route('unidades.index')}}"> <img src="{{asset('imagens/unidades.png')}}" alt="" id="img-adm"></a>
  <a href="{{route('registros.index')}}"> <img src=" {{asset('imagens/registros.png')}}" alt="" id="img-adm"></a>
</div>
<div id="links">
  <h1 id="teste"> <a href="{{route('vacinas.index')}}"> Vacinas</a> </h1>
  <h1 id="teste"> <a href="{{route('pessoas.index')}}"> Pessoas</a> </h1>
  <h1 id="teste"> <a href="{{route('unidades.index')}}"> Unidades</a> </h1>
  <h1 id="teste"> <a href="{{route('registros.index')}}"> Registros</a> </h1>
</div>



@endsection