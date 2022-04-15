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

            // 画像の保存
            if($request->post_img){

                if($request->post_img->extension() == 'gif' || $request->post_img->extension() == 'jpeg' || 
                $request->post_img->extension() == 'jpg' || $request->post_img->extension() == 'png'){
                
                $request->file('post_img')->storeAs('public/post_img', $post->id.'.'.$request->post_img->extension());
                }

            }
        
        return redirect ('/index');
       }

       public function index (Request $request){
            //投稿を新着順にする
            $data = Form::orderBy('created_at', 'desc')->paginate(9);
            return view('post')->with(['data' => $data]);
      }

      public function show ($id){    
        $data = Form::where('id', $id)->first();
        return view('show')->with(['data' => $data]);
      }

      public function edit($id)
    {
        $datas     = Form::where("id",$id)->get();
        $context    = [ "datas" => $datas ];

        return view("edit",$context);
    }

      public function update(CreateTopicRequest $request, $id)
      {
  
          #編集処理のベストプラクティス
          Form::find($id)->update($request->all());
  
          return redirect(route("/index"));
      }

        public function destroy($id)
        {

            #削除のベストプラクティス
            Form::destroy($id);

            return redirect(route("/index"));
        }

}

