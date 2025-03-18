@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Here you can modify somethings</h1>
    <div class="btn btn-primary">
        <a class="text-decoration-none text-light" href={{route('admin.settings.genres.index')}}>Geners</a>
    </div>
</div>
@endsection