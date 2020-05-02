<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\comment;
use App\reply;

class repliesController extends Controller
{
  //listing replies
  public function list(){
    $list_replies = reply::all();
    $data=[
      'list_replies' => $list_replies,
    ];
    return view('dashboard.replies.list')->with($data);
  }

  // Update
  public function update($id){
    $reply = reply::where('id','=',$id)->first();
    $data=[
      'reply' => $reply,
      'list_users' => User::all(),
    ];
    return view('dashboard.replies.update')->with($data);
  }

  // Update
  public function modify(Request $request){
    $reply = reply::where('id','=',$request->id)->first();
    $reply->user_id = $request->user_id;
    $reply->comment_id = $request->comment_id;
    $reply->content = $request->content;
    $reply->save();
    return redirect('/dashboard/replies');
  }

  // Delete
  public function delete(Request $request){
    $reply = reply::where('id','=',$request->id)->first();
    $reply->delete();
    return redirect('/dashboard/replies');
  }
}
