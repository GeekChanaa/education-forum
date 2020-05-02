<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\comment;

class commentsController extends Controller
{
  //listing comments
  public function list(){
    $list_comments = comment::all();
    $data=[
      'list_comments' => $list_comments,
    ];
    return view('dashboard.comments.list')->with($data);
  }

  // Update
  public function update($id){
    $comment = comment::where('id','=',$id)->first();
    $data=[
      'comment' => $comment,
      'list_users' => User::all(),
    ];
    return view('dashboard.comments.update')->with($data);
  }

  // Update
  public function modify(Request $request){
    $comment = comment::where('id','=',$request->id)->first();
    $comment->user_id = $request->user_id;
    $comment->post_id = $request->post_id;
    $comment->content = $request->content;
    $comment->save();
    return redirect('/dashboard/comments');
  }

  // Delete
  public function delete(Request $request){
    $comment = comment::where('id','=',$request->id)->first();
    $comment->delete();
    return redirect('/dashboard/comments');
  }
}
