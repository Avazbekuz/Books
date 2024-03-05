<?php

namespace App\Http\Controllers;

use App\Http\Requests\FiltrCategoryRequest;
use App\Models\Author;
use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Category;
use App\Models\Genre;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_book = Book::orderBy('created_at','desc')->paginate(10);
        return view('admin.books.index', ['books'=>$all_book]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.books.add',['categorys'=>Category::all(),'authors'=>Author::all(),'genres'=>Genre::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $book_pdf = $request->file('book_pdf')->store('book/');
        $photo = $request->file('photo')->store('photo/');
        Book::create([
            "name"=>$request['name'],
            "category_id"=>$request['category'],
            "text"=>$request['text'],
            "author_id"=>$request['author'],
            "genres_id"=>$request['genre'],
            "year"=>$request['years'],
            "photo"=>$photo,
            "book_pdf"=>$book_pdf

        ]);
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('admin.books.show',['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('admin.books.edit',['book'=>$book,'categorys'=>Category::all(),'authors'=>Author::all(),'genres'=>Genre::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        if (isset($request['book_pdf'])){
            $book_pdf = $request->file('book_pdf')->store('book/');
            Storage::delete('public/'.$book->book_pdf);
        }
        else{
            $book_pdf = $book->book_pdf;
        }
        if (isset($request['photo'])){
            $photo = $request->file('photo')->store('photo/');
            Storage::delete('public/'.$book->photo);
        }
        else{
            $photo = $book->photo;
        }
        $book->name=$request['name'];
        $book->category_id=$request['category'];
        $book->text=$request['text'];
        $book->author_id=$request['author'];
        $book->genres_id=$request['genre'];
        $book->year=$request['years'];
        $book->photo=$photo;
        $book->book_pdf=$book_pdf;
        $book->save();

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        Storage::delete('public/'.$book->book_pdf);
        Storage::delete('public/'.$book->photo);
        $book->delete();
        return redirect()->back();
    }
}
