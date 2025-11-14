@extends('layouts.app.main')

@section('content')
    <h1 class="mb-4">Lista de Suportes</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('supports.create') }}" class="btn btn-primary mb-3">Novo suporte</a>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Assunto</th>
                <th>Status</th>
                <th>Conteúdo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($supports as $support)
                <tr>
                    <td>{{ $support->id }}</td>
                    <td>{{ $support->assunto }}</td>
                    <td>
                        @if ($support->status === 'a')
                            <span class="badge bg-success">Aberto</span>
                        @elseif($support->status === 'p')
                            <span class="badge bg-warning text-dark">Pendente</span>
                        @else
                            <span class="badge bg-secondary">Concluído</span>
                        @endif
                    </td>
                    <td>{{ $support->conteudo }}</td>
                    <td>
                        <a href="{{ route('supports.show', $support->id) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('supports.edit', $support->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('supports.destroy', $support->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Tem certeza?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Nenhum suporte encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <!-- Paginação -->
    <div class="d-flex justify-content-center mt-4">
        {{ $supports->links() }}
    </div>
@endsection
