@extends('layouts.app')
@section('mypage')
<style>
    h1{
        color:brown;
        margin-left: 200px;
        font-family:lucida calligraphy
    }
</style>
<br>
<a href="/avaliblecource" class="btn btn-primary me-4" style="float:right">Go back</a><br>

  
  
  <div class="col-6 ms-4 d-inline-block mt-4">
  <div class="card">
    <div class="card-header" style="background-color: brown; color:aliceblue; "class="  d-inline-block">
    
<h2 style="margin-left: 100px;font-family:lucida calligraphy">Cource Details</h2>
        
    </div>
    <div class="card-body" style="background-color: bisque;color:">
      <blockquote class="blockquote mb-0">
        <h3>Name : </h3>
        <p>{{$data["name"]}}</p>
        <h3>Description : </h3>
        <p>{{$data["description"]}}</p> 
        <h3>Duration : </h3>
        <p>{{$data["duration"]}}</p>
       </blockquote>
    </div>
  </div>
<div class="container ms-4  " >
    <br>
  <h1 >Add Feedback</h1>
  <form action="{{route('comments.store')}}" method="post">
  @csrf
  <textarea  type="text" class="form-control" name="body"  cols="80" rows="2">
  </textarea>

   <input type="text" hidden value="{{$data["id"]}}"  name="cource_id"><br>
   <input type="submit" class="btn btn-primary" value="add comment">
  </form>
  
 
@include('cources.displayComment',["comments"=>$data->comments,"user_name"=>auth()->user()->name])

</div>
    </div>
  
 
    
  @endsection





 