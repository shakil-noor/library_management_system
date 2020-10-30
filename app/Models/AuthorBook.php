<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id', 'book_id', 'role'
    ];

    public function author(){
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function book(){
        return $this->belongsTo(Book::class,'book_id');
    }
}
