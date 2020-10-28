<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email', 
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function favorite_books()
    {
        return $this->belongsToMany(Book::class, 'book_favorite', 'user_id', 'book_id')->withTimestamps();
    }
    
    public function comments() 
    {
        return $this->hasMany(\App\Comment::class);
    }
    
    public function loadRelationshipCounts()
    {
        $this->loadCount(['favorite_books','comments']);
    }
    
    public function favorite($bookId)
    {
        // すでにお気に入りしているかの確認
        $exist = $this->is_favorite($bookId);

        if ($exist) {
            // すでにお気に入りしていれば何もしない
            return false;
        } else {
            // お気に入りしていないであればお気に入りする
            $this->favorite_books()->attach($bookId);
            return true;
        }
    }
    
    public function unfavorite($bookId)
    {
        // すでにお気に入りしているかの確認
        $exist = $this->is_favorite($bookId);

        if ($exist) {
            // すでにお気に入りしていればお気に入りを外す
            $this->favorite_books()->detach($bookId);
            return true;
        } else {
            // 未お気に入りであれば何もしない
            return false;
        }
    }

    public function is_favorite($bookId)
    {
        // お気に入り本の中に $bookIdのものが存在するか
        return $this->favorite_books()->where('book_id', $bookId)->exists();
    }
    
}
