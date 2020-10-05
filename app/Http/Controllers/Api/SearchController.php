<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;

class SearchController extends Controller
{
    public function search(Request $request) 
    {
        //dd($request);
        
        
        $url = 'https://app.rakuten.co.jp/services/api/BooksBook/Search/20170404';

        // applicationIdの 'xxxxx....' は取得したアプリIDに書き換える
        $params = [
            'format' => 'json',
            'applicationId' => '1090065011903172178',
            'affiliateId'=> '1cbb6bcb.b85d0223.1cbb6bcc.19ae9cea',
            'hits' => 15,
            'title' => $request->q,
            'isbn' => $request->q,
        ];
    
        $query = http_build_query($params, "", "&");
        $search_url = $url . '?' . $query;
        
        $result = file_get_contents($search_url);
        //dd($result);
        
        if($result){
            return json_decode($result, true);
        }else{
            return [];
        }
    }
}