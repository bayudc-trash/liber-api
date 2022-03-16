<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Genre;

class GenreController extends Controller {
    public function index() {
        return Genre::all();
    }
    public function show(Genre $genre) {
        return $genre;
    }
    public function store(Request $request) {
        $genre = new Genre;
        $genre->name = $request->name;
        $genre->save();

        return response()->json($genre, 201);
    }
    public function update() {
    }
    public function destroy() {
    }
}
