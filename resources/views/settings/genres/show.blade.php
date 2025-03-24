@extends('layouts.app')
@section('title', $genre->name)
@section('content')
    <div class="container">

        <div class="card my-3 w-50 m-auto">
            <div class="card-header">
                {{ $genre->name }}
            </div>
            <div class="card-body">
                {{ $genre->description }}
            </div>
        </div>
        <a class="btn btn-secondary" href={{ route('admin.settings.genres.index') }}>
            <i class="bi bi-arrow-return-left"></i>
            Genres </a>
    </div>
@endsection
