@extends('layouts.main')

@section('title', 'Product')

@section('content')

    @if($id != null)
        <p>exibindo produto {{ $id }}</p>
    @endif

@endsection