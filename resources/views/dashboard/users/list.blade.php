@extends('layouts.dashboard')



@section('content')


<table>
  <tr>
    <td>name</td>
    <td>email</td>
    <td>phone</td>
  </tr>
  @foreach($list_users as $user)
  <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->phone}}</td>
  </tr>
  @endforeach
</table>




@endsection
