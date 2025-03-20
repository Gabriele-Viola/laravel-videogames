@extends('layouts.app')
@section('title', $videogame->title)

@section('content')
    <h1 class="text-center py-3 shadow" style="background-color: rgb(255, 170, 51)">{{ $videogame->title }}</h1>
    <div class="container">
        {{-- @dd($videogame->platforms) --}}

        <div class="text-end">


        </div>
        <div class="card shadow overflow-hidden w-75 mx-auto">
            <div class="position-relative text-center">
                <img class="img-fluid" src={{ asset('storage/' . $videogame->image) }}
                    alt="{{ $videogame->title . 'image' }}">
                <div class="platforms position-absolute top-0 end-0 m-3">
                    @foreach ($videogame->platforms as $platform)
                        <div class="badge" style="background-color: {{ $platform->color }}"><i
                                class="bi bi-{{ $platform->name }}"></i> {{ $platform->name }} </div>
                    @endforeach
                </div>
            </div>
            <div class="card-body position-relative">
                <div><strong>Description: </strong>{{ $videogame->description }}</div>
                <div><strong>Genre: </strong>{{ $videogame->genre->name }}</div>
                <div><strong>Release date: </strong>{{ $videogame->release_date }}</div>
            </div>
        </div>

        <div class=" d-flex justify-content-around my-3">
            <button class="btn btn-secondary mx-3">
                <a class="text-decoration-none text-light" href={{ route('videogames.edit', $videogame) }}>Edit</a>
            </button>

            <x-modal :data="$videogame" />
        </div>

    </div>

@endsection
