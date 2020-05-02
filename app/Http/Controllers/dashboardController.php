<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //main page
    public function main(){
      return view('dashboard.main');
    }
}
