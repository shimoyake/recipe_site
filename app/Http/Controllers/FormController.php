<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function postpage (Request $request){
        return view ('form');
       }
       
       public function savenew (Request $request){
       }
}
