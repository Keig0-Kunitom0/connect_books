<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Book;

class UsersController extends Controller
{
    public function favorite_books($id)
        {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);
        
        // 関係するモデルの件数をロード
        $user->loadRelationshipCounts();

        // ユーザの投稿一覧を作成日時の降順で取得
        $favorites = $user->favorite_books()->orderBy('created_at', 'desc')->paginate(10);

        // お気に入り一覧ビューでそれを表示
        return view('users.favorite_books', 
        [
            'user' => $user,
            'favorites' => $favorites,
        ]);
     }
}
