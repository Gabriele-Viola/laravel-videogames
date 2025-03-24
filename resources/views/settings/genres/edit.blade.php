@extends('layouts.app')
@section('title', 'Update Genre')
@section('content')
    <div class="container mt-5">
        <form class="form-control" action={{ route('admin.settings.genres.update', $genre) }} method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-control-label mb-2" for="name">Nome Genre</label>
                <input class="form-control" type="text" name="name" id="name" required value={{ $genre->name }}>
            </div>
            <div class="mb-3">
                <label class="form-control-label mb-2" for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="10">{{ $genre->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-success"><i class="bi bi-floppy-fill"></i><span> Save</span></button>
        </form>
    </div>
@endsection
