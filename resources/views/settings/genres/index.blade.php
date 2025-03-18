@extends('layouts.app')
@section('content')
<div class="container">
    <div class="text-end">
        <a class="btn btn-primary" href={{route('admin.settings.genres.create')}}><i class="bi bi-plus-circle-fill"></i> Add new Genre</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Logo</th>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col" class="text-center">actions</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($genres as $genre)
            <tr>
                <td>{{$genre->logo ?? 'No Logo'}}</td>
                <td>{{$genre->name}}</td>
                <td>{{$genre->description}}</td>
                <td class="d-flex justify-content-between">
                    <div class="btn btn-secondary">
                      <a class="text-decoration-none text-light" href={{route('admin.settings.genres.edit', $genre->id)}}>
                        <i class="bi bi-pencil-fill"></i></div>
                      </a>
            
                      <x-modal :data="$genre"/>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
    
@endsection