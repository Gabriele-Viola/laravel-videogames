@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{$videogame->title}}</h1>
    <div class="card">
        <div class="card-body position-relative">
            <div><strong>Description: </strong>{{$videogame->description}}</div>
            <div><strong>Genre: </strong>{{$videogame->genre}}</div>
            <div><strong>Release date: </strong>{{$videogame->release_date}}</div>
            <button class="btn btn-secondary position-absolute top-0 end-0 m-3">Modifica</button>
            <button class="btn btn-danger position-absolute top-100 end-0 m-3">Elimina</button>
        </div>
    </div>

</div>
    
@endsection