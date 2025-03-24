@extends('layouts.app')
@section('title', 'update Platform')
@section('content')
    <div class="container mt-2">
        <a class="btn btn-secondary my-4" href={{ route('admin.settings.platforms.index') }}>
            <i class="bi bi-arrow-return-left"></i>
            Platforms </a>
        <form class="form-control" action={{ route('admin.settings.platforms.update', $platform) }} method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-control-label mb-2" for="name">Nome platform</label>
                <input class="form-control" type="text" name="name" id="name" required
                    value="{{ $platform->name }}">
            </div>
            <div class="mb-3">
                <label class="form-control-label mb-2" for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="10" required>{{ $platform->description }}"</textarea>
            </div>
            <div class="mb-3">
                <label class="form-control-label mb-2" for="color">Color</label>
                <input class="form-control form-control-color w-25" type="color" name="color" id="color"
                    value="{{ $platform->color }}">
            </div>
            <button type="submit" class="btn btn-success"><i class="bi bi-floppy-fill"></i><span> Update</span></button>
        </form>
    </div>
@endsection
