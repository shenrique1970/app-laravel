@extends('layouts.app.main')

@section('content')
    <h1>Pagina inicial</h1>
    
        <main>
            <img src="img/capa.jpg" alt="">
            <span>
            <a href="https://br.freepik.com/vetores-gratis/conceito-de-pessoas-de-ti-isometrico_6168526.htm#fromView=search&page=2&position=36&uuid=0e43ad69-f6e9-4830-a22a-b4f2c4eea4e6&query=Suporte+de+informatica">Imagem de macrovector no Freepik</a>
            </span>
        </main>
        <footer>
            <!-- Evite lógica JavaScript inline com PHP no Blade -->
            <p>&copy; {{ date('Y') }} All Rights Reserved SHVR Suporte.</p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    @endsection
