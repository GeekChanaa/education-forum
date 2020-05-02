<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\User;
use auth;s

class postsController extends Controller
{
    //listing posts
    public function list(){
      $list_posts = post::all();
      $data=[
        'list_posts' => $list_posts,
      ];
      return view('dashboard.posts.list')->with($data);
    }

    // Create
    public function create(){
      $list_users = User::all();
      $data=[
        'list_users' => $list_users,
      ];
      return view('dashboard.posts.create')->with($data);
    }

    // Add
    public function add(Request $request){
      $post = new post;
      $post->user_id = Auth::user()->id;
      $post->section_id = $request->section_id;
      $post->content = $request->content;
      $post->title = $request->title;
      $post->save();
      return redirect('/dashboard/posts');
    }


    // Update
    public function update($id){
      $post = post::where('id','=',$id)->first();
      $data=[
        'post' => $post,
        'list_users' => User::all(),
      ];
      return view('dashboard.posts.update')->with($data);
    }

    // Update
    public function modify(Request $request){
      $post = post::where('id','=',$request->id)->first();
      $post->user_id = $request->user_id;
      $post->section_id = $request->section_id;
      $post->content = $request->content;
      $post->title = $request->title;
      $post->save();
      return redirect('/dashboard/posts');
    }

    // Delete
    public function delete(Request $request){
      $post = post::where('id','=',$request->id)->first();
      $post->delete();
      return redirect('/dashboard/posts');
    }

}
