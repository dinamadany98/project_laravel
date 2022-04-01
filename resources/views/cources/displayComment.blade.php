<div class="container ms-4">
    {{--{{$comments}}--}}


    @foreach ($comments as $comment)
    <div class="card mt-3">
        <div class="card-header"  class="d-inline-block">
        
    <p>
    {{$comment->user_name}}</p>
            
        </div>
        <div class="card-body" style="background-color: bisque;color:">
          <blockquote class="blockquote mb-0">
            <h3>{{$comment->body}} </h3>
           </blockquote>
        </div>
    </div>
       
    @endforeach

</div>


