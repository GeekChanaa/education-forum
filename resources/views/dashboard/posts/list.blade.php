@extends('layouts.dashboard')



@section('content')


<table>
  <tr>
    <td>user_id</td>
    <td>content</td>
  </tr>
  @foreach($list_posts as $post)
  <tr>
    <td>{{$post->user_id}}</td>
    <td>{{$post->content}}</td>
  </tr>
  @endforeach
</table>




@endsection
