@props(['videogame'])
<div class="card h-100">
    <div class="card-header text-uppercase">{{$videogame->title}}</div>
    <div class="card-body">
        <div><strong>Description: </strong>{{$videogame->description}}</div>
        <div><strong>Genre: </strong>{{$videogame->genre}}</div>
        <div class="text-end">
            <a class="btn btn-primary text-light" href={{route('videogames.show', $videogame)}}>Show more</a>
        </div>
    </div>
</div>