<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'image', 'publication_id', 'isbn_number', 'total_copies', 'available_copies'
    ];

    public function book_copies(){
        return $this->hasMany(BookCopy::class);
    }

    public function publication(){
        return $this->belongsTo(Publication::class, 'publication_id');
    }
}
