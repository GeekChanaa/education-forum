<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class usersController extends Controller
{
    //listing userss
    public function list(){
      $list_users = User::all();
      $data=[
        'list_users' => $list_users,
      ];
      return view('dashboard.users.list')->with($data);
    }
}
