<h1>EDIT</h1>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('names.update', ['name' => $names->id]) }}" method="post">
    @csrf
    @method('PUT')
    <p>
        <input type="text" name="name" id="name" value="{{ $names->name }}">
    </p>
    <p>
        <input type="submit" value="Atualizar" id="botaoAtualizar">
    </p>
</form>

