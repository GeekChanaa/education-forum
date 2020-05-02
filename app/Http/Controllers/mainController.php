<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\section;
use App\comment;
use App\reply;
use auth;

class mainController extends Controller
{
    //categories
    public function sections(){
      $data=[
        'list_sections' => section::all(),
      ];
      return view('main.sections')->with($data);
    }

    // Posts
    public function posts($id){
      $list_posts = post::where('section_id','=',$id)->get();
      $data=[
        'list_posts' => $list_posts,
        'section' => section::where('_id','=',$id)->first(),
      ];
      return view('main.posts')->with($data);
    }

    // Creating post
    public function create_post($section){
      $data=[
        'section' => section::where('_id','=',$section)->first(),
      ];
      return view('main.create_post')->with($data);
    }

    // Adding post
    public function add_post(Request $request){
      $post = new post;
      $post->user_id = Auth::user()->id;
      $post->section_id = $request->section_id;
      $post->content = $request->content;
      $post->title = $request->title;
      $post->save();
      return redirect('/sections');
    }

    // Post page
    public function post($id){
      $post = post::where('_id','=',$id)->with('user')->first();
      $data=[
        'post' => $post
      ];
      //dd($post);
      return view('main.post')->with($data);
    }
}
