<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\section;

class sectionsController extends Controller
{
  //listing sections
  public function list(){
    $list_sections = section::all();

    $data=[
      'list_sections' => $list_sections,
    ];
    return view('dashboard.sections.list')->with($data);
  }

  // Create
  public function create(){

    return view('dashboard.sections.create');
  }

  // Add
  public function add(Request $request){
    $section = new section;
    $section->user_id = Auth::user()->id;
    $section->title = $request->title;
    $section->save();
    return redirect('/dashboard/sections');
  }

  // Update
  public function update($id){
    $section = section::where('id','=',$id)->first();
    $data=[
      'section' => $section,
    ];
    return view('dashboard.sections.update')->with($data);
  }

  // Update
  public function modify(Request $request){
    $section = section::where('id','=',$request->id)->first();
    $section->title = $request->title;
    $section->save();
    return redirect('/dashboard/sections');
  }

  // Delete
  public function delete(Request $request){
    $section = section::where('id','=',$request->id)->first();
    $section->delete();
    return redirect('/dashboard/sections');
  }
}
