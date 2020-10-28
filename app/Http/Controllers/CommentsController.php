<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request) {

        // バリデーション
        $request->validate([
            'comment' => 'required|max:255',
        ]);
         
        $comment = new \App\Comment();
        $comment->comment = $request->comment;
        $comment->book_id = $request->book_id;
        $comment->user_id = \Auth::id();
        $comment->save();
        
        return back();
        
    }
    
    public function destroy($id) {
        
        $comment = \App\Comment::find0rFail($id);
        
        
        if (\Auth::id() === $$comment->user_id) {
            $$comment->delete();
        }
    }
}
