@extends('layouts.app')
@section('mypage')
<html>
    <header>
        <link rel="stylesheet" href=" {{ URL::asset('css/profile.css') }} " >
           </header>


<body >
 
<div class="container d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="upper"> <img src="{{URL::asset('/image/5.jpg')}}" class="img-fluid"> </div>
        <div class="user text-center">
            <div class="profile"> <img src="{{URL::asset('/image/77.jpg')}}" class="rounded-circle" width="80"> </div>
        </div>
        <div class="mt-5 text-center">
            <h2 class="mb-0">{{auth()->user()->name}}<a  href=" users/{{auth()->user()->id}}/edit"><i class="bi bi-pencil-square"></i></a></h2> <br>
            <span class="text-muted d-block mb-2">{{auth()->user()->email}} </span>
            
            <span class="text-muted d-block mb-2">{{auth()->user()->role}}</span><br>
            <span class="text-muted d-block mb-2">
            <form action="users/{{auth()->user()->id}}"  method="post">
                @method("DELETE")
                @csrf
               <button type="submit" style=" color:red" class="btn "><i class="bi bi-trash3 " ></i>Delete Acount</button> 
            </form> 
            </span>           
    
        </div>
    </div>
</div>
@endsection