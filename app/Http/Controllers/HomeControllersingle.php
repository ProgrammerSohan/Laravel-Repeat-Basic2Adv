<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\MyPost;
use App\Models\Address;
use App\Models\Category;
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
/*
     $post = new MyPost();

     $post->title = 'Post 51,this is the post no 51';
     $post->description = 'This is the description of post 51';
     $post->status = 1;
     $post->publish_date = date('Y-m-d');
     $post->user_id = 1;
     $post->category_id = 1;
     $post->views = 400;

     $post->save();

      dd('success');*/

      /**updating data with eloquent */
      /*
      $post=MyPost::find(52);
      //return $post;
      $post->title = 'Updated Title of 52,This is a new title';
      $post->save();

      dd('success');*/
/*
      $post = MyPost::where('id', 52)->first();
      $post->title = 'This is a new title of 52';
      $post->description = 'Updated description of 52';
      $post->save();

      dd('success');
*/
      // $post = MyPost::where('id', 52)->get();
      /*
       $post = MyPost::where('id', 52)->first();
      $post->title = 'checking2 This is a new title of 52';
      $post->description = 'checking2 Updated description of 52';
      $post->save();

      dd('success');*/

      //deleting data
      /*
        MyPost::find(52)->delete();
         dd('success');*/
       
         /*
       MyPost::findOrFail(51)->delete();
        dd('success');*/
        /*
        MyPost::where('id',50)->delete();
        dd('success');*/

        /*
        $post = MyPost::create([
           'title' => 'This is from mass assign',
           'description'=>'This is a description from mass assign',
           'status' => 1,
           'publish_date' => date('Y-m-d'),
           'user_id' => 1,
           'category_id' => 2,
           'views' => 555

        ]);
        dd('success');*/

        /*
        return $post = MyPost::find(53);
        dd('success');*/

        /*
        $post = MyPost::find(53)->update([
            'title' => 'The date has updated'

        ]);
        dd('success');*/

        /*
        $post = MyPost::where('status', 0)->update([
           'status' => 1

        ]);

        dd('success');*/

        /*
        MyPost::where('id', 49)->delete();

        dd('succes');*/

       // return MyPost::all();

     //  return MyPost::onlyTrashed()->get();
     // MyPost::find(48)->delete();
     //return MyPost::onlyTrashed()->get();

     //restore a record or deleting a record permanently
     //return MyPost::all();
     /*MyPost::withTrashed()->find(48)->restore();

     dd('success');*/

    // return MyPost::all();
          // MyPost::withTrashed()->find(48)->restore();

     // dd('success');
            // return MyPost::onlyTrashed()->get();

            /*
     MyPost::withTrashed()->find(47)->forceDelete();
      dd('success');*/

     // return MyPost::onlyTrashed()->get();

     /*
     $users = User::all();

     //return $users;
     return view('home',compact('users'));*/

     /*
     $addresses = Address::all();

     return view('home', compact('addresses'));*/

    // $categories = Category::all();

    //return $categories = Category::find(1)->posts;

//post - may have many tags
//tag - may have many posts

//pivot table


   // $categories = Category::find(2)->posts;
   // $categories = Category::find(3)->posts;

   //  return view('home', compact('categories'));

      //$post = Post::first();
     // $post = Post::with('tags')->first();
     // $tag = Tag::first();
      //$post->tags()->attach(2,3,4);

     // $post->tags()->attach($tag);

     //return $post;

     /*
     $posts = Post::with('tags')->get();

     $tag = Tag::first();

     return view('home', compact('posts'));
     */

     return view('home');
     
     
    }
 


}
