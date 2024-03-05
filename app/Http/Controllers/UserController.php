<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        $book = new Book();
        $count = $book->book_count();
        $topViewedBooks = $book->orderBy('show_count', 'desc')->take(8)->get();
        $newestBooks = $book->orderBy('created_at', 'desc')->take(8)->get();
        return view('books.index',['show_books'=>$topViewedBooks, 'new_books'=>$newestBooks,'count'=>$count]);
    }
    public function show(Book $book){
        $book->increment('show_count');
        return view('books.show',['book'=>$book]);
    }
    public function book_download(Book $id){
        $id->increment('download_count');
        return response()->download(storage_path('app/'.$id->book_pdf));
    }
    public function all_books(){
        $all_books = Book::orderBy('created_at')->paginate(20);
        $all_category = Category::all();
        $all_author = Author::all();
        $all_genres = Genre::all();

        return view('books.books',['all_books'=>$all_books,'all_category'=>$all_category,'all_authors'=>$all_author,'all_genres'=>$all_genres]);
    }
    public function search_books(Request $request){
      $all_category = Category::all();
      $all_author = Author::all();
      $all_genres = Genre::all();
      $all = Book::where('name','like', '%'.$request->value.'%')->paginate(24);
      return view('books.books',['all_books'=>$all,'all_category'=>$all_category,'all_authors'=>$all_author,'all_genres'=>$all_genres]);
    }
    public function filtr_books($name,$id){

        $all_category = Category::all();
        $all_author = Author::all();
        $all_genres = Genre::all();

        if($name == 'category') {
            $all_books = Book::where('category_id', $id)->paginate(24);
        }
        elseif ($name == 'author'){
            $all_books = Book::where('author_id', $id)->paginate(24);
        }
        elseif ($name == 'genre'){
            $all_books = Book::where('genres_id', $id)->paginate(24);
        }
        else{
            $all_books = Book::orderBy('created_at')->paginate(24);
        }

        return view('books.books',['all_books'=>$all_books,'all_category'=>$all_category,'all_authors'=>$all_author,'all_genres'=>$all_genres]);
    }
}
