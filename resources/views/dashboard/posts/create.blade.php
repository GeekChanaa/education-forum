@extends('layouts.dashboard')



@section('content')


<form class="" action="{{url('/dashboard/posts/add')}}" method="post">
  @csrf
  <div class="">
    <span>title</span>
    <input type="text" name="title">
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
    <input type="text" name="content">
  </div>
</form>


@endsection
