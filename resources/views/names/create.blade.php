@extends('template')

@section('content')

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('names.store')}}" method="post">
    @csrf
    <p>
        <label for="name">Digite uma frase</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <input type="submit" value="Entrar" id="botaoEntrar">
    </p>
</form>

@endsection
