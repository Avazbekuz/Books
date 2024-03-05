<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_author = Author::orderBy('created_at','desc')->paginate(20);
        return view('admin.author.index',['authors'=>$all_author]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.author.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        Author::create([
            "name"=>$request['name']
        ]);

        return redirect()->route('author.index');
    }

    public function edit(Author $author)
    {
        return view('admin.author.edit',['author'=>$author]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->name=$request['name'];
        $author->save();
        return redirect()->route('author.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->back();
    }
}

