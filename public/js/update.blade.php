@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/dashboard/comments/update')}}" method="post">
@csrf

<input type="hidden" name="id" value="{{$comment->id}}">
<div class="">
  <span>post</span>
  <input type="text" name="post_id" value="{{$comment->post_id}}" disabled>
</div>

<div class="">
  <span>user</span>
  <select class="" name="user_id">
    @foreach($list_users as $user)
    <option value="{{$user->id}}">{{$user->name}}</option>
    @endforeach
  </select>
</div>

<div class="">
  <span>content</span>
  <input type="text" name="content" value="{{$comment->content}}">
</div>
</form>




@endsection
