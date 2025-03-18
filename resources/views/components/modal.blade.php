@props(['data'])

<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{$data->id}}">
  @if ($data->genre_id)
      DELETE
      @else
      <i class="bi bi-trash-fill"></i>
  @endif
  
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal{{$data->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="myModalLabel">Are You sure to delete this {{$data->genre_id ? 'videogame' : 'genre'}}?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{$data->title ?? $data->name }}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action={{route($data->genre_id ? 'videogames.destroy' : 'admin.settings.genres.destroy', $data)}} method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
        </div>
      </div>
    </div>
  </div>