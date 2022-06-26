<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
        
    </head>
    <body>

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

        

    </body>
</html>
