@extends('layouts.dashboard')



@section('content')


<div class="">
  Listing of users : <a class="btn btn-dark" href="{{url('/dashboard/users')}}">Users</a>
</div>

<div class="">
  Listing of sections : <a class="btn btn-dark" href="{{url('/dashboard/sections')}}">sections</a>
</div>

<div class="">
  Listing of posts : <a class="btn btn-dark" href="{{url('/dashboard/posts')}}">posts</a>
</div>

<div class="">
  Listing of comments : <a class="btn btn-dark" href="{{url('/dashboard/comments')}}">comments</a>
</div>

<div class="">
  Listing of replies : <a class="btn btn-dark" href="{{url('/dashboard/replies')}}">replies</a>
</div>

@endsection
