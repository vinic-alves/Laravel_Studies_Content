
@extends('layouts.main')

@section('title', 'Show Events')

@section('content')

        <img src="/img/shows.jpg" alt="Live show in a Crownd place">
        <h1>Algum titulo</h1>
        @if(10 > 5)
            <p>A condição é true</p>
        @endif

        <p>{{$nome}}</p>

        @if( $nome == "Pedro")
        <p>O nome é Pedro, Acorda Pedrinho, rsrs</p>
        @elseif($nome == "Vinicius")
        <p>O nome é {{$nome}} e a idade é {{$idade}} e sua profissão é {{$proficao}}</p>
        @else
        <p>O nome não é Pedro</p>
        @endif


        @for($i = 0; $i < count( $arr); $i++ )
            <p>{{$arr[$i] }} - {{ $i }}</p>
            @if ($i == 2)
                <p>O i é 2</p>
            @endif
        @endfor

        @foreach($nomes as $nome)
            <p>{{$loop ->index}}</p>
            <p> {{ $nome }}</p>

        @endforeach

        @php
            $name = "João ";
            Echo $name;

        @endphp

@endsection

        
