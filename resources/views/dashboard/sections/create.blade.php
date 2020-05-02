@extends('layouts.dashboard')



@section('content')



<form class="" action="{{url('/dashboard/sections/add')}}" method="post">
@csrf
<div class="">
  <span>title : </span>
  <input type="text" name="title" value="">
</div>
</form>



@endsection
