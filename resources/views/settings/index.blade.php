@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="py-4">Here you can modify somethings</h1>
        <div class="text-center">

            <div class="btn btn-primary mx-3">
                <a class="text-decoration-none text-light" href={{ route('admin.settings.genres.index') }}>
                    <i class="bi bi-puzzle-fill"></i>
                    Geners
                </a>
            </div>
            <div class="btn btn-primary mx-3">
                <a class="text-decoration-none text-light" href={{ route('admin.settings.platforms.index') }}>
                    <i class="bi bi-joystick"></i>
                    Platforms</a>
            </div>
        </div>
    </div>
@endsection
