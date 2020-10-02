<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function show($id)
    {
        // idの値でユーザを検索して取得
        $user = User::findOrFail($id);
        
        // ユーザ詳細ビューでそれを表示
        return view('users.show', [
            'user' => $user,
        ]);
    }
    
    public function edit($id)
    {
         // idの値でユーザを検索して取得
        $user = User::findOrFail($id);
        
        // ユーザ詳細ビューでそれを表示
        return view('users.edit', [
            'user' => $user,
        ]);
    }
    
    public function update(array $data, $id)
    {
    
        $user = User::findOrFail($id);
        
        //ユーザー情報を更新
        return User::create([
            'profile' => $data['profile'],
            'nickname' => $data['nickname'],
            'name' => $data['name'],
            'name_kana' => $data['name_kana'],
            'birthday' => $data['birthday'],
            'post_code' => $data['post_code'],
            'prefecture' => $data['prefecture'],
            'city' => $data['city'],
            'housse_number' => $data['housse_number'],
            'building_name' => $data['building_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        
        return redirect('/');
    }
}
