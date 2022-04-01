@extends('layouts.app')
@section('mypage')
<html>
    <header>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href=" {{ URL::asset('css/form.css') }} " >
        <style>
            h1{
                color:brown;
                margin-left: 200px;
                font-family:lucida calligraphy
            }
        </style>
    </header>
    <body  style="background-color: lavender">
      <br>
<h1> Add New Cource</h1>
<div id="form-main">
    <div id="form-div">
<form action="/cources" method="POST">
  @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name"  name="name"  > 
     
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <input  type="text" class="form-control" id="description"  name="description"   >
      
   
    </div>
      <div class="mb-3">
        <label for="duration" class="form-label">Duration</label>
        <input type="text" class="form-control" id="duration"  name="duration"  > 
       
   
      </div> 

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     

</body>
</html>
@endsection