<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

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
}
