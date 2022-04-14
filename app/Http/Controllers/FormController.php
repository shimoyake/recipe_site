<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function postpage (Request $request){
        return view ('form');
       }
       
       public function savenew (Request $request){
            $post = new Form;
            $post->title = $request->title;
            $post->main = $request->main;
            $post->save();
        
        return redirect ('/index');
       }

       public function index (Request $request){
            //投稿を新着順にする
            $data = Form::orderBy('created_at', 'desc')->paginate(5);
            return view('post')->with(['data' => $data]);
      }
}

