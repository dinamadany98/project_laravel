@extends('layout.header')
 
@section('contact')
<html lang="en-US"  >
<head> 
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  
<style>
    
 
</style>

</head>
<body>
    
    <div class="row ">
        <div class="col-5">

            <img src="{{URL::asset('/image/a.png')}}" >
    
        </div>
        <div class="col-6" style="padding-top: 100px">

            <h1 style="font-family:lucida calligraphy,cursive;color:brown">About Us</h1>
            <h5>
                Paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit 
                ex. Suspendisse rhoncus laoreet purus quis elementum. Phasellus sed efficitur dolor, 
                et ultricies sapien. Quisque fringilla sit amet dolor commodo efficitur.
                 Aliquam et sem odio. In ullamcorper nisi nunc, et molestie ipsum iaculis sit amet.
            </h5>
    
        </div>
    </div>


</body>
</html>
@endsection