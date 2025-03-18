@props(['videogame'])
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#videogameModal">
    Delete
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="videogameModal" tabindex="-1" aria-labelledby="videogameModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="videogameModalLabel">Are You sure to delete this videogame?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{$videogame->title}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action={{route('videogames.destroy', $videogame)}} method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
        </div>
      </div>
    </div>
  </div>