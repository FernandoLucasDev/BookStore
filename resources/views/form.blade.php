@extends('layouts.app')

@section('content')
<h1 style="margin-left: 5rem">Cadastrar livro</h1>
<div class="back-form">
<form action="/save" method="POST">
    @csrf
    <div class="card-form">
        <div class="form-group">
            <label for="name">Nome:</label>
            <input class="input" type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input class="input" type="text" name="isbn" id="isbn" required>
        </div>
        <div class="form-group">
            <label for="value">Valor:</label>
            <input class="input" type="number" name="value" id="value" step="0.01" required>
        </div>
        <button type="submit">Salvar</button>
    </div>
</form>
</div>
@endsection