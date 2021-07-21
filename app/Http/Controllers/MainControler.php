<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use Auth;

class MainControler extends Controller
{
   function index()
   {
       return view('login');
   }
   
   function check_login(Request $request)
   {
       $this->validate($request,[
           'email' => 'required|email',
           'password' => 'required|alphaNum|min:3',

       ]);

       $data_user=array(
        'email'    =>$request->get('email'),
        'password' =>$request->get('password')
       );

       if(Auth::attempt($data_user))
       {
          return redirect('m/sucess');
       }else{
          return back()->with('error','Worng Login Datails');
       }
   }

   function sucess_login(){
       return view('successlogin');
   }
   
   function logout()
   {
       Auth::logout();
       return redirect('/index');
   }
}
