<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\DB;
class Validation extends Controller
{
    public function register_validation(Request $request)
    {
        $validate=$request->validate([
            'email'=>"required|email",
            'password'=>"required|min:5"
        ]);
        if($validate){
            $post=new Students;
            $post->Email=$request->input('email');
            $post->Password=md5($request->input('password'));
            $put=$post->save();
            if($put){
              return redirect("/register")->with("status","Registration Success Pls Login");
            }
        }
    }
    public function login_validation(Request $request)
    {
        $validate=$request->validate([
            'email'=>"required|email",
            'password'=>"required|min:5"
        ]);
      if($validate){
        $post=new Students;
        $post->Email=$request->input('email');
        $post->Password=md5($request->input('password'));
        $query=DB::select('select *from registrations where Email=? and Password=?',[ $post->Email, $post->Password]);
        if($query){
            return redirect("/main");
        }
        else{
            return redirect("/login")->with("status","Login-Failed");
        }
      }
    }
}
