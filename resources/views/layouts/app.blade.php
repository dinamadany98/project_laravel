<html>
    <header>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
     
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <style>
 html,body{
  height: 100vh;
       overflow:auto;
}
     body{
      min-height: 100%;
      min-height: 100vh;
      background-size: cover;
    min-height: 100%;
      
       background-color:lavender ;
     }
   </style>
      </header>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{URL::asset('/image/123.png')}}" width="70px" height="70px"  style="border-radius: 50%;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav " style="margin-left: 650px">
            <li class="nav-item">
              <a class="nav-link active  " aria-current="page" href="/loginhome" >Home</a></li>
              <li class="nav-item"> <a class="nav-link active  " aria-current="page" href="/about">About Us</a></li>
          <li class="nav-item"><a class="nav-link active  " aria-current="page" href="/contact">Contact Us</a>
            </li>
          <li class="nav-item"><a class="nav-link active " aria-current="page" href="/"> Cources</a>
            </li>
         
          @guest

          @if (Route::has('login'))
  
              <li class="nav-item">
  
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
  
              </li>
  
          @endif
          @if (Route::has('register'))
  
    <li class="nav-item">
  
      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
  
    </li>
  
                                  @endif
                                  @else
  
                                  <li class="nav-item dropdown">
      
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
      
                                          {{ Auth::user()->name }}
      
                                      </a>
      
                                      
                                   
                                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        
                                        <a class="dropdown-item"  href="/myprofile">My Profile</a> 
                                        @can("isTeacher")
                                        <a class="dropdown-item"  href="/cources">My Cources</a>
                                        @elsecan("isStudent") 
                                        <a class="dropdown-item"  href="/avaliblecource">Available Cources</a>
                                        <a class="dropdown-item"  href="/getenrollcource">My Enrollments</a>
                                        @endcan
                                          <a class="dropdown-item" href="{{ route('logout') }}"
      
                                             onclick="event.preventDefault();
      
                                                           document.getElementById('logout-form').submit();">
      
                                              {{ __('Logout') }}
      
                                          </a>
      
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
  
                                              @csrf
      
                                          </form>
  
                                      </div>
      
                                  </li>
      
                              @endguest
          </ul>
          
          
        
        </div>
      </div>
      </nav>
       
@yield('mypage')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     
</body>

</html>





                          