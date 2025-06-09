<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
        public function index(){

            return view('login');
        }

        public function handleLogin(Request $request){
               /* echo $_POST['name'];
                echo $_POST['email'];
                echo $_POST['password'];*/

                //dd($request);
               // dd($request->all());
               /*
                $request->validate([
                    'name'=> 'required',
                    'email'=> 'required',
                    'password'=>'required'

                ]);

               return $request;*/
               /*
               $request->validate([
                    'name' => 'required|alpha',
                    'email'=> 'required',
                    'password'=>'required'


               ]);

               return $request;*/

               $request->validate([
                    'name'=> ['required','alpha','min:6','max:10'],
                    'email'=> ['required','email'],
                    'password'=>'required'

               ]);

               return $request;

        }
}
