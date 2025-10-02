@extends('template')


@section('criar')

<p>
    <a href="{{ route('names.create')}}"><img src="{{ asset('imagens/botao_criar.png') }}" alt="criar" id="botao_criar_postagem_A"></a>
</p>

@endsection

@section('content')

<h1>frases legais</h1>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<ul>
    @foreach ($names as $name)
        <li>
            <div>
                {{ $name->name }} | <a href="{{ route('names.edit', ['name' => $name->id]) }}">Edit</a> | 
                <form action="{{ route('names.destroy', ['name' => $name->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
                </form>
            </div>
        </li>
    @endforeach
</ul>

@endsection