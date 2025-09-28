<h1>frases legais</h1>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<p>
    <a href="{{ route('names.create')}}">Coloque uma frase legal Ü</a>
</p>

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

