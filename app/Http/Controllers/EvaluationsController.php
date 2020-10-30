<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EvaluationsController extends Controller
{
    public function add_good($id)
    {
        \Auth::user()->add_good($id);
     
        return back();
    }

  
    public function remove_good($id)
    {
        \Auth::user()->remove_good($id);
        
        return back();
    }
    
    public function add_bad($id)
    {
        \Auth::user()->add_bad($id);
     
        return back();
    }

  
    public function remove_bad($id)
    {
        \Auth::user()->remove_bad($id);
        
        return back();
    }
}
