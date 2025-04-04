@extends('layouts.app')
@section('title', $genre->name)
@section('content')
    <div class="container">

        <a class="btn btn-secondary my-4" href={{ route('admin.settings.genres.index') }}>
            <i class="bi bi-arrow-return-left"></i>
            Genres </a>
        <div class="card my-3 w-75  m-auto">
            <div class="card-header fs-3">
                {{ $genre->name }}
            </div>
            <div class="card-body lh-lg fs-5">
                {{ $genre->description }}
            </div>
        </div>
    </div>
@endsection
