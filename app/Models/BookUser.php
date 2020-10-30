<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'book_copy_id', 'status', 'loan_request_id', 'return_request_id', 'lend_at', 'loan_expire_at'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function book_copy(){
        return $this->belongsTo(BookCopy::class, 'book_copy_id');
    }

    public function loan_request(){
        return $this->belongsTo(LoanRequest::class, 'loan_request_id');
    }

    public function return_request(){
        return $this->belongsTo(LoanRequest::class, 'return_request_id');
    }

}
