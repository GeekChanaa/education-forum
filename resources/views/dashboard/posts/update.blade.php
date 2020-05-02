@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/dashboard/posts/update')}}" method="post">
@csrf
<div class="">
  <input type="hidden" name="id" value="{{$post->id}}">
  <span> user :  </span>
  <select class="" name="user_id">
    @foreach($list_users as $user)
      <option value="{{$user->id}}">{{$user->name}}</option>
    @endforeach
  </select>
</div>

<div class="">
  <span>section</span>
  <select class="" name="section_id">
    @foreach($list_sections as $section)
      <option value="{{$section->id}}">{{$section->title}}</option>
    @endforeach
  </select>
</div>

<div class="">
  <span>content</span>
  <input type="text" name="content" value="{{$post->content}}">
</div>

</form>




@endsection
