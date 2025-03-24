@props(['videogame', 'show'])
<div class="card h-100 shadow">
    <div class="card-header text-uppercase fw-semibold">{{ $videogame->title }}</div>
    <img class="img-fluid max-height-img object-contein" src={{ asset('storage/' . $videogame->image) }}
        alt="{{ $videogame->title . 'image' }}">
    <div class="card-body d-flex justify-content-between">
        <div>
            {{-- <div class="{{ $show ? '' : 'd-none' }}"><strong>Description: </strong>{{ $videogame->description }}</div> --}}
            <div><strong>Genre: </strong>{{ $videogame->genre->name }}</div>
        </div>
        <div class="text-end">
            <a class="btn btn-primary text-light" href={{ route('videogames.show', $videogame) }}>
                Details
                <i class="bi bi-box-arrow-in-down-right"></i>
            </a>
        </div>
    </div>
</div>
