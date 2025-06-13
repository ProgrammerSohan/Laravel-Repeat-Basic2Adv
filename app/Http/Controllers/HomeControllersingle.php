<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeControllersingle extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        /* $blogs = [
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

    ];*/

        //return DB::table('posts')->get();
        //return DB::table('posts')->find(7);
        //return DB::table('posts')->first();
       // return DB::table('posts')->where('status','=',2)->get();
       // return DB::table('posts')->pluck('title','id');
      //  return DB::table('posts')->pluck('title');
      //************************************** */
      //********Using of where condition***** */
        //return DB::table('posts')->where('id','=',10)->get();
        //return DB::table('posts')->where('id',10)->get();
       // return DB::table('posts')->where('id','>',10)->get();
       //return DB::table('posts')->where('id','>',10)->where('id','<',20)->get();
      // return DB::table('posts')->where('status',0)->get();
      //return DB::table('posts')->where('status', 1)->get();
     // return DB::table('posts')->where('status','!=',1)->get();
     return DB::table('posts')->where('status','=',1)->get();

        return view('home', compact('blogs'));
    }
}
