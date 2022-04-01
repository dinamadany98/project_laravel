

@extends('layouts.app')
@section('mypage')

<h1 style=" color:brown;margin-left: 150px;font-family:lucida calligraphy">My Enrollments </h1>

@if(Session::has('success'))
<div class="alert alert-success" role="alert" style="padding-left: 100px ;margin-left:30px;width:85%" >
  {{Session::get('success')}}
</div>
@endif 
  @foreach($data as $item)
  <div class="col-5 ms-4 d-inline-block mt-4">
  <div class="card">
    <div class="card-header" style="background-color: brown; color:aliceblue; "class="  d-inline-block">
     {{$item["name"]}}
    </div>
    <div class="card-body" style="background-color: bisque;color:">
      <blockquote class="blockquote mb-0">
        <h3>Description : </h3>
        <p>{{$item["description"]}}</p> 
        <h3>Duration : </h3>
        <p>{{$item["duration"]}}</p>
        <a class="btn btn-outline-success ms-3 " href="{{route("user.deletusercorce",$item->id)}}" role="button" style="float:right">Un-Enroll</a>
        <a class="btn btn-outline-info" href="/cources/{{$item["id"]}}" role="button" style="float:right">Take Aview</a>
       
       </blockquote>
    </div>
  </div>
</div>
 
    @endforeach
  @endsection





 