@extends('layout')
@section('title', 'Sistema de Curriculum Vitae')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Sistema de Curriculum Vitae
            </div>

            @auth
                <a class="btn btn-primary" href="{{ route('experiencia.index') }}">Experiencias</a>
                <a class="btn btn-primary" href="{{ route('habilidad.index') }}">Habilidades</a>
                <a class="btn btn-primary" href="{{ route('referencia.index') }}">Referencias</a>
            @endauth
            <!--
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            -->
        </div>
    </div>
@endsection
