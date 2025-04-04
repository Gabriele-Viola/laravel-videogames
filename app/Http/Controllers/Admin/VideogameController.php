<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Platform;
use App\Models\Videogame;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videogames = Videogame::all();
        $platforms = Platform::all();
        // dd($platforms);
        return view('videogames.index', compact('videogames', 'platforms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        $platforms = Platform::all();
        return view('videogames.create', compact('genres', 'platforms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newVideogame = new Videogame();
        $newVideogame->title = $data['title'];
        $newVideogame->category = $data['category'];
        $newVideogame->genre_id = $data['genre_id'];
        $newVideogame->description = $data['description'];
        $newVideogame->release_date = $data['release_date'];

        if (array_key_exists('image', $data)) {
            $image_url = Storage::putFile('Videogames', $data['image']);
            $newVideogame->image = $image_url;
        };

        $newVideogame->save();

        $newVideogame->platforms()->attach($data['platforms']);
        return redirect()->route('videogames.show', $newVideogame);
    }

    /**
     * Display the specified resource.
     */
    public function show(Videogame $videogame)
    {
        $platforms = Platform::all();
        return view('videogames.show', compact('videogame', 'platforms'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videogame $videogame)
    {
        $genres = Genre::all();
        $platforms = Platform::all();
        return view('videogames.edit', compact('videogame', 'genres', 'platforms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videogame $videogame)
    {
        $data = $request->all();
        $videogame->title = $data['title'];
        $videogame->category = $data['category'];
        $videogame->genre_id = $data['genre_id'];
        $videogame->description = $data['description'];
        $videogame->release_date = $data['release_date'];


        if (array_key_exists('image', $data)) {

            Storage::delete($videogame->image);

            $image_url = Storage::putFile('Videogames', $data['image']);
            $videogame->image = $image_url;
        }

        $videogame->update();

        if ($request->has('platforms')) {
            $videogame->platforms()->sync($data['platforms']);
        } else {
            $videogame->platforms()->detach();
        }

        return redirect()->route('videogames.show', $videogame);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Videogame $videogame)
    {
        $videogame->platforms()->detach();
        $videogame->delete();
        return redirect()->route('videogames.index');
    }
}
