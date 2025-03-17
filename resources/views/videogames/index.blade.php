@extends('layouts.app')

@section('content')
<div class="container">
    <h1>I tuoi videogiochi</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-4">
        @foreach ($videogames as $videogame)
        <div class="col">

            <x-card :videogame="$videogame"/>

        </div>
        @endforeach



    </div>
</div>
@endsection