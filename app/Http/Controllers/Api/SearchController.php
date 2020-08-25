<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
         // https://app.rakuten.co.jp/services/api/BooksBook/Search/20170404?
        //         applicationId=[アプリID]
        //         &title=%E5%A4%AA%E9%99%BD
        //         &booksGenreId=001004008
        //         &sort=%2BitemPrice
        
        $url = 'https://app.rakuten.co.jp/services/api/BooksBook/Search/20170404';

        // applicationIdの 'xxxxx....' は取得したアプリIDに書き換える
        $params = [
            'format' => 'json',
            'applicationId' => '1090065011903172178',
            'hits' => 15,
            'title' => '金持ち父さん',
            // 'author' => $keyword,
            // 'publisherName' => $keyword,
            //'size' => 0,
            // 'isbn' => $keyword,
        ];
    
        $query = http_build_query($params, "", "&");
        $search_url = $url . '?' . $query;
        
        // var_dump($search_url);
        // exit();

        return file_get_contents($search_url);
    }
}