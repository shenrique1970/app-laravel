@extends('layouts.app.main')

@section('titulo', 'Home')

@section('content')
    <section class="position-relative d-flex align-items-center justify-content-center text-white"
        style="background-image: url('/img/capa.jpg'); background-size: cover; background-position: center; height: 400px;">
        <!-- Overlay escuro semitransparente -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

        <!-- Conteúdo central -->
        <div class="position-relative text-center">
            <h1 class="display-4 fw-bold">Bem-vindo ao SHVR Suporte</h1>
            <p class="lead">Aqui você encontra ajuda rápida e eficiente para suas necessidades.</p>
            <a href="{{ route('supports.index') }}" class="btn btn-primary btn-lg mt-3">Acessar Suporte</a>
        </div>
    </section>


@endsection
