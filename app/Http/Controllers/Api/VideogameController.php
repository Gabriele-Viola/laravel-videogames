<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Videogame;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public function index()
    {
        $videogames = Videogame::with('genre', 'platforms')->get();

        return response()->json([
            'success' => true,
            'data' => $videogames
        ]);
    }
    public function show(Videogame $videogame)
    {
        $videogame->load('genre', 'platforms');
        return response()->json([
            'success' => true,
            'data' => $videogame
        ]);
    }
}
