<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
     public function handleImage(Request $request)
     {
       // return "Hello! Sohan";

       //return $request->all();
      // dd($request->file('image'));

     // $request->image->store('/');
      $request->image->storeAs('/images', 'new_image.jpg');

     }
}
