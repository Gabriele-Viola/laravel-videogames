@extends('layouts.app')
@section('title', 'Add Genre')
@section('content')
    <div class="container mt-2">
        <a class="btn btn-secondary my-4" href={{ route('admin.settings.genres.index') }}>
            <i class="bi bi-arrow-return-left"></i>
            Genres </a>
        <form class="form-control" action={{ route('admin.settings.genres.store') }} method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-control-label mb-2" for="name">Nome Genre</label>
                <input class="form-control" type="text" name="name" id="name" required placeholder="Es. ARCADE">
            </div>
            <div class="mb-3">
                <label class="form-control-label mb-2" for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="10" required
                    placeholder="A short description of genre's type"></textarea>
            </div>

            <button type="submit" class="btn btn-success"><i class="bi bi-floppy-fill"></i><span> Save</span></button>
        </form>
    </div>
@endsection
