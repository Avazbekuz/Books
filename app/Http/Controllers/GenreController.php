<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_genre = Genre::orderBy('created_at','desc')->paginate(20);
        return view('admin.genre.index',['genres'=>$all_genre]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.genre.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGenreRequest $request)
    {
        Genre::create([
            "name"=>$request['name']
        ]);

        return redirect()->route('genre.index');
    }

    public function edit(Genre $genre)
    {
        return view('admin.genre.edit',['genre'=>$genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGenreRequest $request, Genre $genre)
    {
        $genre->name=$request['name'];
        $genre->save();
        return redirect()->route('genre.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->back();
    }
}
