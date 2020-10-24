<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Book;

class FavoritesController extends Controller
{
    public function store($id)
    {
        \Auth::user()->favorite($id);
     
        return back();
    }

  
    public function destroy($id)
    {
        \Auth::user()->unfavorite($id);
        
        return back();
    }
}
