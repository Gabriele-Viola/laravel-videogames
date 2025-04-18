@extends('layouts.app')
@section('title', 'All Platforms')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between my-3">
            <a class="btn btn-secondary" href={{ route('admin.settings.') }}>
                <i class="bi bi-arrow-return-left"></i>
                Settings</a>
            <a class="btn btn-primary" href={{ route('admin.settings.platforms.create') }}>
                <i class="bi bi-file-earmark-plus-fill"></i>
                New Platform</a>
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
                @foreach ($platforms as $platform)
                    <tr>
                        <td class="">
                            <a href={{ route('admin.settings.platforms.show', $platform) }}>
                                <style>
                                    :root {
                                        --color-{{ $platform->name }}: {{ $platform->color }};
                                    }
                                </style>
                                <span class="badge text-capitalize text-shadow bg-hover-{{ $platform->name }}"
                                    style="background-color: {{ $platform->color }}">
                                    <i class="bi bi-{{ $platform->name }}"></i> {{ $platform->name }}
                                </span>
                            </a>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <a class="bg-hover-{{ $platform->name }} px-2 py-1 rounded text-decoration-none text-dark"
                                href={{ route('admin.settings.platforms.show', $platform) }}>

                                {{ substr($platform->description, 0, 120) . '...' }}
                            </a>
                        </td>
                        <td class="d-flex justify-content-evenly">
                            <a class="text-decoration-none text-light btn btn-secondary mx-2"
                                href={{ route('admin.settings.platforms.edit', $platform->id) }}>
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <x-modal :data="$platform" />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
