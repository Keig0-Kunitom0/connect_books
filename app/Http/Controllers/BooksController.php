<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Comment;

class BooksController extends Controller
{
    public function books () {
        return view('welcome');
    }
    
    public function show ($id) {
        
        $book = Book::findOrFail($id);
        
        $book->loadRelationshipCounts();
        
        $book->goodCounts();
        
        $book->badCounts();
        
        $comments = $book->comments()->orderBy('created_at', 'desc')->paginate(25);
        
        
        return view('books.show',[
            'book' => $book,
            'comments' => $comments,
        ]);
    }
    
}
