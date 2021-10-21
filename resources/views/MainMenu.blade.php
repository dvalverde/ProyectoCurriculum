@extends('layout')
@section('title', 'Menu Principal')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                My Curriculum Vitae
            </div>
                <a href="{{ route('experiencia.index') }}">
                <input class="button button-def" type="submit" value="Experiencias">
                </a>
                <a href="{{ route('habilidad.index') }}">
                <input class="button button-def" type="submit" value="Habilidades">
                </a>
                <a href="{{ route('referencia.index') }}">
                <input class="button button-def" type="submit" value="Referencias">
                </a>
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
