@extends('layouts.app')
@section('content')
<div class="container">
    {{-- @dd($videogame->genre) --}}
    <h1>{{$videogame->title}}</h1>
    <div class="card shadow">
        <div class="card-body position-relative">
            <div><strong>Description: </strong>{{$videogame->description}}</div>
            <div><strong>Genre: </strong>{{$videogame->genre->name}}</div>
            <div><strong>Release date: </strong>{{$videogame->release_date}}</div>
            <button class="btn btn-secondary position-absolute top-0 end-0 m-3">
                <a class="text-decoration-none text-light" href={{route('videogames.edit', $videogame)}}>Edit</a>
            </button>
            <div class="position-absolute top-100 end-0 m-3">

                <x-modal :videogame="$videogame"/>
            </div>
        </div>
    </div>

</div>
    
@endsection