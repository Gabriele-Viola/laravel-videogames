@extends('layouts.app')
@section('content')
<div class="container">
    {{-- @dd($videogame->genre) --}}
    <h1>{{$videogame->title}}</h1>
    <div class="card shadow overflow-hidden">
    <img src={{asset('storage/' . $videogame->image)}} alt="{{$videogame->title . 'image'}}">
        <div class="card-body position-relative">
            <div><strong>Description: </strong>{{$videogame->description}}</div>
            <div><strong>Genre: </strong>{{$videogame->genre->name}}</div>
            <div><strong>Release date: </strong>{{$videogame->release_date}}</div>
            <button class="btn btn-secondary position-absolute top-50 end-0 translate-middle-y mx-3">
                <a class="text-decoration-none text-light" href={{route('videogames.edit', $videogame)}}>Edit</a>
            </button>
        </div>
    </div>
    <div class=" text-center m-3">

        <x-modal :data="$videogame"/>
    </div>

</div>
    
@endsection