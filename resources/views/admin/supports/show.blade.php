@extends('layouts.app.main')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Detalhes do suporte. {{ $supports->id }}</h1>
    <ul class="list-group">
        <li class="list-group-item mb-3">Assunto: {{ $supports->assunto }}</li>
        <li class="list-group-item mb-3">Status: {{ $supports->status }}</li>
        <li class="list-group-item mb-3">Descrição: {{ $supports->conteudo }}</li>
    </ul>
</div>
<a href="{{ route('supports.edit', $supports->id) }}" class="btn btn-warning">Editar</a>
<a href="{{ route('supports.index') }}" class="btn btn-secondary">Voltar</a>
@endsection