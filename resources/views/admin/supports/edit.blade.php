@extends('layouts.app.main')

@section('content')
    <div class="container mt-4">
        <h1>Editar support</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Erro!</strong> Verifique os campos abaixo:
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('supports.update', $supports->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="assunto" class="form-label">Assunto</label>
                <input type="text" name="assunto" id="assunto" class="form-control"
                    value="{{ old('assunto', $supports->assunto) }}" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <select name="status" id="status" class="form-select">
                    <option value="a" {{ old('status') == 'a' ? 'selected' : '' }}>Aberto</option>
                    <option value="p" {{ old('status') == 'p' ? 'selected' : '' }}>Pendente</option>
                    <option value="c" {{ old('status') == 'c' ? 'selected' : '' }}>Concluído</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="conteudo" class="form-label">Conteúdo</label>
                <input type="text" name="conteudo" id="conteudo" class="form-control"
                    value="{{ old('conteudo', $supports->conteudo) }}">
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('supports.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
