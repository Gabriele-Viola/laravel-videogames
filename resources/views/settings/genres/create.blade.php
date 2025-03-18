@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <form class="form-control" action={{route('admin.settings.genres.store')}} method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-control-label mb-2" for="name">Nome Genre</label>
                <input class="form-control" type="text" name="name" id="name" required placeholder="Es. ARCADE">
            </div>
            <div class="mb-3">
                <label class="form-control-label mb-2" for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="10" required placeholder="A short description of genre's type"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-control-label mb-2" for="logo">Logo</label>
                <input class="form-control" type="file" name="logo" id="logo">
                <div class="form-text">It isn't necessary</div>
            </div>
            <button type="submit" class="btn btn-success"><i class="bi bi-floppy-fill"></i><span> Save</span></button>
        </form>
    </div>
@endsection