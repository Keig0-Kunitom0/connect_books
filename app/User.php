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
    
    public function evaluations()
    {
        return $this->hasMany(\App\Evaluation::class);
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
    
    
    
    public function add_good($id)
    {
        // すでに 高評価しているかの確認
        $exist = $this->is_good($id);

        if ($exist) {
            // すでに高評価していれば何もしない
            return false;
        } else {
           $good = $this->evaluations()->create([
               'book_id' => $id,
               'user_id' => \Auth::user()->id,
               'good_or_bad' => '1',
           ]);
           
           $this->remove_bad($id);
           return true;
        }
        
    }
    
    public function add_bad($id)
    {
        // すでに 低評価しているかの確認
        $exist = $this->is_bad($id);

        if ($exist) {
            // すでに低評価していれば何もしない
            return false;
        } else {
            // 低評価していないであれば高評価する
            $good = $this->evaluations()->create([
               'book_id' => $id,
               'user_id' => \Auth::user()->id,
               'good_or_bad' => '-1',
           ]);
           
           $this->remove_good($id);
            return true;
        }
    }
    
    public function remove_good($id)
    {
        $exist = $this->is_good($id);

        if ($exist) {
            // すでに低評価していれば低評価を外す
            $this->evaluations()->where('good_or_bad','1')->delete();
            return true;
        } else {
            // 未低評価であれば何もしない
            return false;
        }
    }
    
    public function remove_bad($id)
    {
        $exist = $this->is_bad($id);

        if ($exist) {
            // すでに低評価していればお気に入りを外す
           $this->evaluations()->where('good_or_bad','-1')->delete();
        } else {
            // 未低評価であれば何もしない
            return false;
        }
    }
    
    public function is_good($id)
    {
        return $this->evaluations()->where('book_id', $id)
                                   ->where('user_id',\Auth::user()->id)
                                   ->where('good_or_bad','1')
                                   ->exists();
    }
    
    public function is_bad($id)
    {
        return $this->evaluations()->where('book_id', $id)
                                   ->where('user_id',\Auth::user()->id)
                                   ->where('good_or_bad','-1')
                                   ->exists();
    }
}
