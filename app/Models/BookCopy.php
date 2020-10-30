<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCopy extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid', 'book_id', 'edition', 'condition', 'description', 'published_date', 'is_available', 'added_by'
    ];

    public function book(){
        return $this->belongsTo(Book::class,'book_id');
    }
    public function added_by(){
        return $this->belongsTo(User::class,'added_by');
    }

    public function book_copies(){
        return $this->hasMany(BookCopy::class);
    }
}
