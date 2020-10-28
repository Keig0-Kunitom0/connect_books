<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title','author','publisher','img_url','release_date','isbn','affiliate',
    ];
    
    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'book_favorite', 'book_id', 'user_id')->withTimestamps();
    }
    
    public function comments() 
    {
        return $this->hasMany(\App\Comment::class);
    }
    
    public function loadRelationshipCounts()
    {
        $this->loadCount(['comments']);
    }
    
}
