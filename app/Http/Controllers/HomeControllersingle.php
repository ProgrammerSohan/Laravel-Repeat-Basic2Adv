<?php

namespace App\Http\Controllers;

use App\Models\MyPost;
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
     /*return DB::table('posts')->where('status','=',1)->get();

        return view('home', compact('blogs'));*/

        /*
        DB::table('posts')->insert([
            [
            'title' => 'This is test data',
            'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, optio ea neque fugit deleniti sequi autem aliquid ex labore cupiditate ducimus esse sunt maiores veniam? Deserunt accusantium explicabo pariatur quibusdam.',
            'status' => 1,
            'publish_date' => date('Y-m-d'),
            'user_id' =>1
            ],
            [
                'title' => 'This is data 2',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, optio ea neque fugit deleniti sequi autem aliquid ex labore cupiditate ducimus esse sunt maiores veniam? Deserunt accusantium explicabo pariatur quibusdam.',
                'status' => 1,
                'publish_date' => date('Y-m-d'),
                'user_id'=> 2

            ]

        ]);
        dd('successfull');*/

       // return DB::table('posts')->where('id',57)->get();
     /*  return DB::table('posts')->where('id',57)->update([
            'title' => 'updated title of 57',
            'description'=> 'this is the updated description of 57'

       ]);
       dd('success');*/

       //delete data from db
        /*
       DB::table('posts')->where('id',57)->delete();
       dd('success');*/
/*
       DB::table('posts')->delete(56);
       dd('success');*/
        
       //basic join statement
     //  return DB::table('posts')->join('category','posts.category_id', '=', 'category.id')->get();

    /* return DB::table('posts')->join('category','posts.category_id', '=','category.id')
      ->select('posts.*')
       ->get(); */

      /*
    return DB::table('posts')->join('category','posts.category_id', '=', 'category.id')   
        ->select('category.*')
        ->get();*/
      //  return DB::table('category')->get();

      /*******Aggregates******** */
      /**
       * count()
       * max()
       * min()
       * avg()
       * sum()
       * */
       // return DB::table('posts')->count();

      // return DB::table('posts')->sum('views');
     // return DB::table('posts')->avg('views');
      //  return DB::table('posts')->min('views');
     // return DB::table('posts')->max('views');

     /***S12-fundamental-database-eloquent orm */
       // return $posts = MyPost::all();
       /*
        $post = MyPost::find(50);
        return $post->title;*/
        
        //return $post = MyPost::findOrFail(50);

      //  return $post = MyPost::find(50);

      /*
      $posts = MyPost::all();
      return $posts;*/

      /*
      $posts = MyPost::all();
      foreach($posts as $post){
        echo $post->title . "<br>";
      }*/

      //return MyPost::all();

     // return MyPost::where('views', '=', 120)->get();
     // return MyPost::where('views', '>',100)->where('id', '=', 30)->get();
     // return MyPost::where('views', '>',1500)->orwhere('id', '=', 30)->get();

     //inserting or saving data with eloquent

     $post = new MyPost();

     $post->title = 'Post 51,this is the post no 51';
     $post->description = 'This is the description of post 51';
     $post->status = 1;
     $post->publish_date = date('Y-m-d');
     $post->user_id = 1;
     $post->category_id = 1;
     $post->views = 400;

     $post->save();

      dd('success');

    }
 


}
