@extends('layouts.dashboard')



@section('content')



<form class="" action="{{url('/dashboard/sections/update')}}" method="post">
@csrf
<div class="">
  <span>title : </span>
  <input type="text" name="title" value="{{$section->title}}">
  <input type="hidden" name="id" value="{{$section->id}}">
</div>
</form>



@endsection
