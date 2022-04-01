@extends('layouts.app')
@section('mypage')
<html>
    <header>
        <link rel="stylesheet" href=" {{ URL::asset('css/profile.css') }} " >
           </header>
<style>
    input{
      border-top-style: hidden;
  border-right-style: hidden;
  border-left-style: hidden;
   }
</style>

<body >
    <form action="/users/{{$data['id']}}"   method="POST">
        @method("PUT") 
        @csrf
<div class="container d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="upper"> <img src="{{URL::asset('/image/5.jpg')}}" class="img-fluid"> </div>
        <div class="user text-center">
            <div class="profile"> <img src="{{URL::asset('/image/77.jpg')}}" class="rounded-circle" width="80"> </div>
        </div>
        <div class="mt-5 text-center">
            <input type="text" class="form-control" id="name"  name="name"  value="{{$data['name']}}" style="border: 0;outline: 0;border-bottom: 2px solid" > <br>
            <span class="text-muted d-block mb-2">{{auth()->user()->email}} </span>
            
            <span class="text-muted d-block mb-2">{{auth()->user()->role}}</span><br>
            
            
            <button type="submit" class="btn btn-success">Update</button> 
            
                     
    
        </div>
    </div>
</div>
    </form>
@endsection