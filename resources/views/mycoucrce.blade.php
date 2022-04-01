
@extends('layouts.app')
@section('mypage')

<h1 style=" color:brown;margin-left: 150px;font-family:lucida calligraphy"> MY Cources</h1>
<a class="btn btn-success" href="/cources/create" style="margin-left:800px">Add New Cource</a><br><br>
  
@if(Session::has('success'))
<div class="alert alert-success" role="alert" style="padding-left: 100px ;margin-left:30px;width:85%" >
  {{Session::get('success')}}
</div>
@endif 
 
  @foreach($data as $item)
  @if($item["user_id"]==auth()->user()->id)
  <div class="col-5 ms-4 d-inline-block mt-4">
  <div class="card">
    <div class="card-header" style="background-color: brown; color:aliceblue; "class="  d-inline-block">
     {{$item["name"]}}
     <form action="/cources/{{$item['id']}}"  method="post">
    @method("DELETE")
    @csrf
   <button type="submit" style="float:right ;color:blue" class="btn d-inline-block"><i class="bi bi-trash3 " ></i></button> 
  
   <a  href="cources/{{$item['id']}}/edit"><i class="bi bi-pencil-square" style="float:right"></i></a> 
  </form>
    </div>
    <div class="card-body" style="background-color: bisque;color:">
      <blockquote class="blockquote mb-0">
        <h3>Description : </h3>
        <p>{{$item["description"]}}</p> 
        <h3>Duration : </h3>
        <p>{{$item["duration"]}}</p>
       </blockquote>
    </div>
  </div>
</div>
@endif
    @endforeach
  @endsection





 