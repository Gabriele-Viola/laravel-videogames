@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row row-cols-1 gy-3 ">
        <div class="col ">
            <div class="card ">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header"> VideoGames</div>
                <div class="card-body">
                    <p>
                        intro videogiochi Lorem ipsum dolor sit amet. 
                    </p>
                    <div class="btn btn-primary">
                        <a class="text-decoration-none text-light" href={{ route('videogames.index') }}>More info</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header"> Fumetti</div>
                <div class="card-body">
                    work in progres
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header"> Films</div>
                <div class="card-body">
                    work in progres
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
