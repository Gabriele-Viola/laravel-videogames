@extends('layouts.app')

@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <div class="container py-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-4">
                    <img src="{{ asset('image/joypad.jpeg') }}" alt="joypad logo" class="image-blend rounded img-fluid shadow">
                </div>
                <div class="col-8">
                    <h1 class="display-5 fw-bold">
                        Welcome to your personal favorite videogames management system <i class="bi bi-box"></i>
                    </h1>
                    <p class="col-md-8 fs-4">
                        Here you can add on your personal space, your favorite videgames, whit its description, genre and
                        the platforms where it is available.
                    </p>
                    @guest
                        <p>
                            <a class="fw-bold" href="{{ route('register') }}">Sign up</a>
                            to start your Videogames's Catalogues
                        </p>
                    @else
                        <p>
                            <a class="fw-bold" href="{{ route('videogames.index') }}">See your List</a>
                            to start your Videogames's Catalogues
                        </p>
                    @endguest
                </div>

            </div>

        </div>
    </div>

    <div class="content">
        <div class="container">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora temporibus, dicta nemo aliquam totam nisi
                deserunt soluta quas voluptatum ab beatae praesentium necessitatibus minus, facilis illum rerum officiis
                accusamus dolores!</p>
        </div>
    </div>
@endsection
