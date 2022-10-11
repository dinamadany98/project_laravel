<html>
    <header>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </header>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="{{URL::asset('/image/123.png')}}" width="70px" height="70px"  style="border-radius: 50%;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav " style="margin-left: 650px">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="/myhome" >Home</a></li>
                <li class="nav-item"> <a class="nav-link active text-light" aria-current="page" href="/about">About Us</a></li>
            <li class="nav-item"><a class="nav-link active text-light" aria-current="page" href="/contact">Contact Us</a>
              </li>
            <li class="nav-item"><a class="nav-link active text-light" aria-current="page" href="/myhome"> Cources</a>
              </li>
              <li class="nav-item"><a class="nav-link active text-light" aria-current="page" href="{{ route('login') }}"> Login</a>
              </li>
            </li>
            <li class="nav-item"><a class="nav-link active text-light" aria-current="page" href="{{ route('register') }}"> Register</a>
            </li>
             
            </ul>
            
            
          
          </div>
        </div>
      </nav>

@yield('myhome')
<br>
@extends('layout.foter')  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     
</body>

</html>
