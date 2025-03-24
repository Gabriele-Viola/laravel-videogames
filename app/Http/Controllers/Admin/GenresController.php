<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Videogame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GenresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();
        return view('settings.genres.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('settings.genres.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // dd($newGenre);
        $newGenre = new Genre();
        $newGenre->name = $data['name'];
        $newGenre->description = $data['description'];

        $newGenre->save();

        return redirect()->route('admin.settings.genres.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        return view('settings.genres.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        // dd($genre);
        return view('settings.genres.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $data = $request->all();

        // dd($genre);
        $genre->name = $data['name'];
        $genre->description = $data['description'];
        $genre->update();

        return redirect()->route('admin.settings.genres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        Videogame::where('genre_id', $genre->id)
            ->update(['genre_id' => 12]);
        $genre->delete();
        return redirect()->route('admin.settings.genres.index');
    }
}
