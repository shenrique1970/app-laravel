@extends('layouts.app.main')

@section('titulo', 'Home')

@section('content')
    @section('section')
        <h1>Home</h1>
        @section('article')
            <figure class="figure container-sm h-25">
                <img src="img/capa.jpg" alt="capa" class="img-fluid w-100 object-fit-cover">
            </figure>
        @endsection
    @endsection

@endsection


