@extends('layouts.app.main')

@section('content')
    <h1 class="mb-4">Criar novo suporte</h1>

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
@endsection
