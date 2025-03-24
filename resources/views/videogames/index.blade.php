@extends('layouts.app')
@section('title', 'Your Videogames')

@section('content')
    <div class="container">
        <h1 class="my-4">I tuoi videogiochi</h1>
        <div class="d-flex justify-content-between">
            <div class="btn btn-success mb-3">
                <a class="text-light text-decoration-none" href={{ route('videogames.create') }}>
                    <i class="bi bi-file-earmark-plus-fill"></i>
                    New Videogame</a>
            </div>
            <div class="btn btn-secondary mb-3 ">
                <a class="text-light text-decoration-none" href={{ route('admin.settings.') }}>
                    <i class="bi bi-gear-wide-connected"></i>
                    Settings</a>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4">
            @foreach ($videogames as $videogame)
                <div class="col">

                    <x-card :videogame="$videogame" :show=false />

                </div>
            @endforeach



        </div>
    </div>
@endsection
