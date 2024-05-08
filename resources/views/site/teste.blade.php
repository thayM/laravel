@extends('site.layouts.basico')

@section('title', 'Página de Teste')

@section('conteudo')
    @extends('site.layouts._partials.menu')
    <h1>Valor 1: {{ $p1 }}</h1>
    <h1>Valor 2: {{ $p2 }}</h1>
    <h1>Resultado: {{ $p1 + $p2 }}</h1>
@endsection