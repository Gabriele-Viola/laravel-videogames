@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Scan to see the app</h1>

        {!! QrCode::size(300)->generate($url) !!}
    </div>
@endsection