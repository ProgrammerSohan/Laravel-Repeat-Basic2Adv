<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeControllersingle;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/home', function(){
   // return view('home');
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

});*/

//define routing
/*
Route::get('about', function(){
    //return "<h1>About Page</h1>";
    return view('about');

})->name('about');*/

/*
Route::get('contact',function(){
   // return "<h1>Contact Page</h1>";
   return view('contact');
});*/

Route::get('test', function(){
    //return view('test.index');
    $test = 'this is test index page view data';
    $test2 = 'this is test 2 data';

    //return view('test.index', ['test'=>$test]);
    return view('test.index', compact('test','test2'));

});

Route::get('about-sohan', function(){
    return "<h1>This is Sohan Info</h1>";
})->name('hello');

//route parameters
/*
Route::get('contact/{id}', function($id){
    return $id;
});*/

//naming routes
/*
Route::get('home', function(){
    return "<a href=''>About</a>";
});

Route::get('home', function(){
    return "<a href='".route('about')."'>About</a>";
});


Route::get('home', function(){
    return "<a href='".route('hello')."'>About Sohan</a>";
});


Route::get('hometest', function(){
    return "<a href='".route('edit-contact', 1)."'>Contact Form</a>";
});

Route::get('contact/{id}/edit',function($id){
     return "Edit form for contact with ID: " . $id;
})->name('edit-contact');

Route::get('hometest', function(){
    return "<a href='".route('edit-contact', 2)."'>Contact Form</a>";
});

//route grouping
Route::get('/customer', function(){
    return "<h1>Customer List</h1>";
});    

Route::get('/customer/create',function(){
    return "<h1>Customer Create</h1>";
});

Route::get('/customer/show', function(){
    return "<h1>Customer Show</h1>";
});

Route::group(['prefix' => 'customer'], function(){
     Route::get('/', function(){
         return "<h1>Customer List prefix</h1>";
     });
});*/

//route methods
/**
 * GET - Request a resource
 * POST - Create a new resource
 * PUT - Update a resource
 * PATCH - Modify a resource
 * DELETE - Delete a resource
 */

Route::get('/test1', function(){
    return "<h1>Test1 Page</h1>";
});

Route::get('test2', function(){
    return "<h1>Test2 Page</h1>";
});

Route::fallback(function(){
    return "This page is not Exists!";
});


//***s08-fundamental-controller** */

//Route::get('/home', [HomeController::class, 'index']);
Route::get('/home', HomeControllersingle::class);  //single action controller

Route::get('about',[AboutController::class, 'index'])->name('about');

/*
Route::get('contact', function(){
     return view('contact');
});*/
Route::get('contact', [ContactController::class, 'index']);

Route::resource('blog', BlogController::class);

Route::get('/login', [loginController::class, 'index'])->name('login');

Route::post('/login', [loginController::class, 'handleLogin'])->name('login.submit');









