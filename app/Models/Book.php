<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class Book extends Model
{
    use HasFactory;

    public $fillable=['name','category_id','author_id','genres_id','text','photo','book_pdf','year'];

    public function book_count(){
        $show_count = Book::sum('show_count');
        $download_count = Book::sum('download_count');
        $all_books = Book::count();

        $all_count = [
            'show_count' => $show_count,
            'download_count' => $download_count,
            'book_count' => $all_books
        ];

        return $all_count;
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function genres() : BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }
    public function author() : BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
