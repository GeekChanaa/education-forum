@extends('layouts.dashboard')



@section('content')


<table>
  <tr>
    <td>id</td>
    <td>user</td>
    <td>comment</td>
    <td>actions</td>
  </tr>
  @foreach($list_replies as $reply)
  <tr>
    <td>{{$reply->id}}</td>
    <td>{{$reply->user_id}}</td>
    <td>{{$reply->comment_id}}</td>
    <td>

    </td>
  </tr>
  @endforeach
</table>




@endsection
