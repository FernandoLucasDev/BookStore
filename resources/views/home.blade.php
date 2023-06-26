@extends('layouts.app')

@section('content')
<h1 style="margin-left: 5rem">Livros</h1>
<div class="card-container">
    <div class="div-back">
        @foreach ($books as $book)
        <div class="card">
            <h3>{{ $book->name }}</h3>
            <p>ISBN: {{ $book->isbn }}</p>
            <p>Valor: R$ {{ $book->value }}</p>
            <hr>
            <form action={{ "/delete/" . $book->id }}>
                <button>Excluir livro</button>
            </form>
        </div>
    @endforeach
    </div>
</div>
@endsection