@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Aggiungi un nuovo videogioco</h1>
        <form action={{route('videogames.update', $videogame)}} class="form-control shadow" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title"  class="form-control-label">Title</label>
            <input class="form-control" type="text" name="title" id="title" required value={{$videogame->title}}>
        </div>
        <div class="mb-3">
            <label for="description" class="form-control-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="10" required >{{$videogame->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="category" class="form-control-label">Category</label>
            <input class="form-control" type="text" name="category" id="category" required value={{$videogame->category}}>
        </div>
        <div class="mb-3">
            <label for="genre_id" class="form-control-label">Genre</label>
            <select class="form-select" name="genre_id" id="genre_id">
                <option value="">-- Select Genre --</option>
                @foreach ($genres as $genre)
                <option value="{{$genre->id}}" {{$videogame->genre_id == $genre->id ? 'selected' : ''}}>{{$genre->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="release_date" class="form-control-label">Release Date</label>
            <input class="form-control" type="date" name="release_date" id="release_date" required value={{$videogame->release_date}}>
        </div>
            <button class="btn btn-success mb-3" type="submit"> Update videogame</button>
        </form>
    </div>
@endsection