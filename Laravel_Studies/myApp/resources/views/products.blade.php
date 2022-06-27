@extends('layouts.main')

@section('title', 'Products')

@section('content')
    
<h1>Essa é a tela de Produtos </h1>
<a href="/">Volta pra home</a>
@if($busca != '')
<p>O usuário está buscando por: {{$busca }}</p>

@endif


@endsection