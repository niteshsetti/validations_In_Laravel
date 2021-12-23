<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function age_checker(Request $request){
        $store=$request->age;
        if($store>18){
            return redirect('/login');
        }
        else{
            return redirect('/error');
        }
    }
}
