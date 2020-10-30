<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'status', 'status_changed_by', 'reason', 'status_change_date'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function status_changed_by(){
        return $this->belongsTo(User::class,'status_changed_by');
    }
}
