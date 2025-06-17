<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
     public function index(){
            $blogs = [
        [
            'title'=> 'Title One',
            'body' => 'This is a body text',
            'status' => 1
        ],
        [
            'title' => 'Title Two',
            'body'  => 'This is a body text',
            'status' => 0

        ],
        [
            'title' => 'Title Three',
            'body'  => 'This is a body text',
            'status' => 1

        ],
        [
            'title' => 'Title Four',
            'body'  => 'This is a body text four',
            'status' => 0

        ],
        [
            'title' => 'Title Five',
            'body'  => 'This is a body text five',
            'status' => 1

        ],
        [
            'title' => 'Title Six',
            'body'  => 'This is a body text six',
            'status'=> 0

        ]

    ];

        return view('home', compact('blogs'));

     }

      public function PostStats()
    {   
        $stats = [
            'total_posts' => DB::table('posts')->count(),
            'max_id' => DB::table('posts')->max('id'),
            'min_id' =>DB::table('posts')->min('id'),
            'sum_user_id'=>DB::table('posts')->sum('user_id'),
            'avg_user_id'=>DB::table('posts')->avg('user_id'),

        ];
        return view('posts.stats', compact('stats'));

    }//full aggregate
}
