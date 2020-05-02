@extends('layouts.dashboard')



@section('content')


<table>
  <tr>
    <td>Id</td>
    <td>Title</td>
    <td>User</td>
  </tr>
  @foreach($list_sections as $section)
  <tr>
    <td>{{$section->id}}</td>
    <td>{{$section->title}}</td>
    <td>{{$section->user_id}}</td>
  </tr>
  @endforeach
</table>




@endsection
