@extends('layouts.app.main')

@section('titulo', 'Detalhes')

@section('content')
    <div class="container mt-4">
        <div class="d-flex p-2 bg-light">
            <h1>Detalhes do suporte #{{ $support->id }}</h1>
        </div>
        <ul class="list-group">
            <li class="list-group-item mb-3">Assunto: {{ $support->assunto }}</li>
            <li class="list-group-item mb-3">Status: {{ $support->status }}</li>
            <li class="list-group-item mb-3">Descrição: {{ $support->conteudo }}</li>
        </ul>
    </div>
    <a href="{{ route('supports.edit', $support->id) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('supports.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
