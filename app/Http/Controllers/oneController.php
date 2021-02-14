<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class oneController extends Controller
{
    public function second(request $request){
         return view('second');
     }
     public function third(request $request){
        return view('third');
    }
}
