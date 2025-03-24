@extends('layouts.app')
@section('title', 'Add Videogame')
{{-- @dd($platforms) --}}
@section('content')
    <div class="container">
        <h1 class="my-3">Add a new Videogame</h1>
        <a class="btn btn-secondary my-4" href={{ route('videogames.index') }}>
            <i class="bi bi-arrow-return-left"></i>
            Videogames
        </a>
        <form action={{ route('videogames.store') }} class="form-control shadow" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-control-label mb-2">Title</label>
                <input class="form-control" type="text" name="title" id="title" required
                    placeholder="Es. Tomb's Rider">
            </div>

            <div class="mb-3">
                <label for="description" class="form-control-label mb-2">Description</label>
                <textarea class="form-control" name="description" id="description" rows="10" required
                    placeholder="Es. A short description of the game"></textarea>
            </div>
            <div class="mb-3">
                <label for="genre_id" class="form-control-label mb-2">Genre</label>
                <select class="form-select" name="genre_id" id="genre_id">
                    <option value="">-- Select Genre --</option>
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="category" class="form-control-label mb-2">Category</label>
                <input class="form-control" type="text" name="category" id="category" required placeholder="Es. Arcade">
            </div>
            <div class="text-center text-uppercase mb-3 fw-semibold">select platforms</div>
            <div class="row row-cols-2 row-cols-md-4 gy-2 justify-content-center my-4">
                @foreach ($platforms as $platform)
                    <div class="form-check col d-flex align-items-center justify-content-center">
                        <input type="checkbox" id="platform-{{ $platform->id }}" name="platforms[]"
                            value="{{ $platform->id }}" class="mx-2 form-check-input">
                        <label for="platform-{{ $platform->id }}"class="badge text-capitalize text-shadow "
                            style="background-color: {{ $platform->color }}">
                            <i class="bi bi-{{ $platform->name }}"></i> {{ $platform->name }}
                        </label>
                    </div>
                @endforeach

            </div>
            <div class="mb-3">
                <label for="release_date" class="form-control-label mb-2">Release Date</label>
                <input class="form-control" type="date" name="release_date" id="release_date" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-control-label mb-2">Add videogame pic</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <button class="btn btn-success mb-3" type="submit"> Add videogame</button>
        </form>
    </div>
@endsection
