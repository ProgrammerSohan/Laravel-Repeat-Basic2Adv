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

     /*
     $request->validate([
         'image' => 'required',

     ]);*/

     /*
     $request->validate([
         'image' => ['required', 'max:500']

     ]);*/

     /*
     $request->validate([
         'image' => ['required', 'min:100', 'max:500']

     ]);*/

      $request->validate([
         'image' => ['required','min:100', 'max:500','mimes:png,jpg,gif']

      ]);

      $request->image->storeAs('/images', 'new_image.jpg');

     // return redirect()->route('success');
     // return redirect()->back();
     return redirect('/success');


     }
}
