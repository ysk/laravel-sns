<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    //============= ここまで追加 =============
    public function index()
    {
        // // ダミーデータ
        // $articles = [
        //     (object)[
        //         'id'    => 1,
        //         'title' => 'タイトル1',
        //         'body'  => '本文1',
        //         'created_at' => now(),
        //         'user' => (object)[
        //             'id' => 1,
        //             'name' => 'ユーザー名1',
        //         ],
        //     ],
        //     (object)[
        //         'id'    => 2,
        //         'title' => 'タイトル2',
        //         'body'  => '本文2',
        //         'created_at' => now(),
        //         'user' => (object)[
        //             'id' => 2,
        //             'name' => 'ユーザー名2',
        //         ],
        //     ],
        //     (object)[
        //         'id'    => 3,
        //         'title' => 'タイトル3',
        //         'body'  => '本文3',
        //         'created_at' => now(),
        //         'user' => (object)[
        //             'id' => 3,
        //             'name' => 'ユーザー名3',
        //         ],
        //     ],
        // ];
        $articles = Article::all()->sortByDesc('created_at');
        
        return view('articles.index', ['articles'=>$articles]);
    }
    //============= ここまで追加 =============
}
