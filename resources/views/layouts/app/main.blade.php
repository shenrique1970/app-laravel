<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <!-- Bootstrap CSS (apenas uma versão) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <title>@yield('titulo')</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-secondary bg-gradient text-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/images/logo.png" alt="Logo SHVR" title="Página inicial">
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('supports.index') }}">Suporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contato">Contatos</a>
                </li>
            </ul>
            <!-- Search form -->
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- Conteúdo principal -->
    <div class="container my-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="fixed-bottom bg-secondary bg-gradient text-white text-center py-2">
        <p>&copy; {{ date('Y') }} All Rights Reserved SHVR Suporte.</p>
    </footer>

    <!-- Bootstrap JS (apenas uma versão) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
