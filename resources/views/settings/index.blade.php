@extends('layouts.app')
@section('title', 'Settings')

@section('content')
    <div class="container">
        <h1 class="py-4 text-center">Here you can modify some things</h1>
        <div class="text-center my-4">
            <a class="text-decoration-none text-light btn btn-primary mx-3" href={{ route('admin.settings.genres.index') }}>
                <i class="bi bi-puzzle-fill"></i>
                Geners
            </a>
            <a class="text-decoration-none text-light btn btn-primary mx-3"
                href={{ route('admin.settings.platforms.index') }}>
                <i class="bi bi-joystick"></i>
                Platforms</a>
        </div>
        <div class="text-center my-5">
            <a class="btn btn-secondary my-4" href={{ route('videogames.index') }}>
                <i class="bi bi-arrow-return-left"></i>
                Videogames
            </a>
        </div>
    </div>
@endsection
