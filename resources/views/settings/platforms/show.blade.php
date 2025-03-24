@extends('layouts.app')
@section('title', $platform->name)
@section('content')
    <div class="container">

        <a class="btn btn-secondary my-4" href={{ route('admin.settings.platforms.index') }}>
            <i class="bi bi-arrow-return-left"></i>
            Platforms </a>
        <div class="card my-3 w-75  m-auto">
            <div class="card-header fs-3 text-capitalize">
                {{ $platform->name }}
            </div>
            <div class="card-body lh-lg fs-5">
                {{ $platform->description }}
            </div>
        </div>
    </div>
@endsection
