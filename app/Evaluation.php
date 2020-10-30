<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = ['good_or_bad','book_id','user_id'];
    
    public function user() {
        return $this->belongsTo(\App\User::class);
    }
    
    public function book() {
        return $this->belongsTo(\App\Book::class);
    }
}
