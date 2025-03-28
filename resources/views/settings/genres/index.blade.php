@extends('layouts.app')
@section('title', 'All Genres')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between my-3">
            <a class="btn btn-secondary" href={{ route('admin.settings.') }}>
                <i class="bi bi-arrow-return-left"></i>
                Settings</a>
            <a class="btn btn-primary" href={{ route('admin.settings.genres.create') }}>
                <i class="bi bi-file-earmark-plus-fill"></i>
                New Genre</a>
        </div>
        <table class="table">
            <thead>
                <tr class="text-capitalize">
                    <th scope="col">name</th>
                    <th scope="col" class="d-none d-md-table-cell">description</th>
                    <th scope="col" class="text-center">actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($genres as $genre)
                    <tr class="{{ $genre->name == 'No Genre' ? 'd-none' : '' }}">
                        <td>
                            <a class="text-decoration-none text-light btn btn-info w-100"
                                href={{ route('admin.settings.genres.show', $genre) }}>
                                {{ $genre->name }}
                            </a>
                        </td>
                        <td class="d-none d-md-table-cell">{{ substr($genre->description, 0, 130) . '...' }}</td>
                        <td class="d-flex justify-content-evenly">
                            <a class="text-decoration-none text-light btn btn-secondary mx-2"
                                href={{ route('admin.settings.genres.edit', $genre->id) }}>
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <x-modal :data="$genre" />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
