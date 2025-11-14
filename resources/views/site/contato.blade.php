@extends('layouts.app.main')

@section('content')
    <h1>Pagina de contato</h1>

    <footer>
        <!-- Evite lógica JavaScript inline com PHP no Blade -->
        <p>&copy; {{ date('Y') }} All Rights Reserved SHVR Suporte.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
@endsection
