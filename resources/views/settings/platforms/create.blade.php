@extends('layouts.app')
@section('title', 'Add Platform')

@section('content')
    <div class="container mt-2">
        <a class="btn btn-secondary my-4" href={{ route('admin.settings.platforms.index') }}>
            <i class="bi bi-arrow-return-left"></i>
            Platforms </a>
        <form class="form-control" action={{ route('admin.settings.platforms.store') }} method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-control-label mb-2" for="name">Nome platform</label>
                <input class="form-control" type="text" name="name" id="name" required placeholder="Es. Game-Boy">
            </div>
            <div class="mb-3">
                <label class="form-control-label mb-2" for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="10" required
                    placeholder="A short description about platform"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-control-label mb-2" for="color">Color</label>
                <input class="form-control form-control-color w-25" type="color" name="color" id="color">
            </div>
            <button type="submit" class="btn btn-success"><i class="bi bi-floppy-fill"></i><span> Save</span></button>
        </form>
    </div>
@endsection
