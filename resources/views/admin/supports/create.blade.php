@extends('layouts.app.main')

@section('titulo', 'Novo')

@section('content')
    <div class="container mt-4">
        <div class="d-flex p-2 bg-light"><h1>Criar novo suporte</h1></div>
        <form action="{{ route('supports.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="assunto" class="form-label">Assunto:</label>
                <input type="text" name="assunto" id="assunto" 
                    class="form-control @error('assunto') is-invalid @enderror"
                    value="{{ old('assunto') }}">
                @error('assunto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
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
                <label for="conteudo" class="form-label">Conteúdo:</label>
                <textarea name="conteudo" id="conteudo" 
                        class="form-control @error('conteudo') is-invalid @enderror">{{ old('conteudo') }}</textarea>
                @error('conteudo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
