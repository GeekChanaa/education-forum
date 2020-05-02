@extends('layouts.dashboard')



@section('content')


<table>
  <tr>
    <td>id</td>
    <td>user</td>
    <td>content</td>
  </tr>
  @foreach($list_comments as $comment)
  <tr>

      <td>{{$comment->id}}</td>
      <td>{{$comment->user_id}}</td>
      <td>{{$comment->content}}</td>

  </tr>
  @endforeach
</table>




@endsection
