@extends('layouts.app')
@section('content')

<div class="container">
    <div class="text-end">
        <a class="btn btn-primary" href={{route('admin.settings.platforms.create')}}><i class="bi bi-plus-circle-fill"></i> Add new Platform</a>
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
            @foreach ($platforms as $platform)
            <tr>
                <td>{{$platform->logo ?? 'No Logo'}}</td>
                <td >
                    <span class="badge text-capitalize text-shadow" style="background-color: {{$platform->color}}">
                        {{$platform->name}}
                    </span></td>
                <td>{{$platform->description}}</td>
                <td class="d-flex justify-content-between">
                    <div class="btn btn-secondary">
                      <a class="text-decoration-none text-light" href={{route('admin.settings.platforms.edit', $platform->id)}}>
                        <i class="bi bi-pencil-fill"></i></div>
                      </a>
            
                      <x-modal :data="$platform"/>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
    
@endsection