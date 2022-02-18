@extends('layouts.forntend.app')
@section('title')
 <title>{{env('APP_NAME')}} | Post-Details</title>
@endsection
@section('content')

 

<section class="py-5">
  
@isset($posts)
      <div class="container text-center">
         <h4>{{$posts->title}}</h4>
        <p class="h6 mb-0  text-primary">{!! $posts->discription !!}</p>
       
       
       {{-- <ul class="list-inline small text-uppercase mb-0">
          <li class="list-inline-item align-middle"><img class="rounded-circle shadow-sm" src="{{ asset('frontend/img/person-1.jpg')}}" alt="" width="40"/></li>
          <li class="list-inline-item me-0 text-muted align-middle">By </li>
          <li class="list-inline-item align-middle me-0"><a class="fw-bold reset-anchor" href="#!">Jason Doe</a></li>
          <li class="list-inline-item text-muted align-middle me-0">|</li>
          <li class="list-inline-item text-muted align-middle me-0">June 15, 2019</li>
          <li class="list-inline-item text-muted align-middle me-0">|</li>
          <li class="list-inline-item text-muted align-middle">20 Comments</li>
        </ul>--}}
      </div>
       
      <img class="w-100 py-5" style="height: 500px" src="{{asset('/backend/images/uploads/'.$posts->image)}}" alt="">
     @endisset
      <div class="container">
        @if(session('error'))
        <span class="alert alert-danger">{{session('error')}}</span>

        @endif
        <div class="row gy-5">
          <div class="col-lg-8">
            <p class="lead first-letter-styled lh-4"></p>
           
            <h3 class="h4 mb-4">Leave a comment</h3>

            
            <form class="mb-5" id="comment_data">
              @csrf
              <div class="row gy-3">
                
                <div class="col-lg-12">
                  <input type="hidden" name="blog_id" value="{{$posts->id}}"/>
                  <textarea class="form-control" name="comment" rows="5" placeholder="Leave your message"></textarea>
                </div>
                         
                <div class="col-lg-12">                 
                  <button class="btn btn-dark" type="submit">Submit your comment</button>    
                </div>            
              </div>
            </form>
            
            <h3 class="h4 mb-4 d-flex align-items-center"><span>Comments</span></h3>
            @isset($comments)

            <ul class="list-unstyled comments">
             
              <li>
                @foreach($comments as $comment)               
                  <div class="pe-2 flex-grow-1" style="width: 75px; min-width: 75px;"><img class="rounded-circle shadow-sm img-fluid img-thumbnail" src="img/person-3.jpg" alt=""/></div>
                  <div class="ps-2">
                    <p class="small mb-0 text-primary">{{$comment->created_at}}</p>
                   <h5>{{$comment->username}}</h5>
                    <p class="text-muted text-sm mb-2">{{$comment->comment}}</p>
                  </div>
               
                @endforeach
              </li>
            </ul>
            @endisset
          </div>
          <div class="col-lg-4">
           
            <div class="mb-5">
              <h3 class="h5">Latest posts</h3>
              <p class="text-sm text-muted mb-4">Lorem ipsum dolor sit, consectetur adipisicing elit, sed do eiusmod.</p>
              @isset($latest_posts)
              @foreach($latest_posts as $latest)
              <ul class="list-unstyled">
                <li class="d-flex mb-1"><a href="{{route('post',$latest->slug)}}"><img src="{{asset('/backend/images/uploads/'.$latest->image)}}" alt="" width="80"></a>
                  <div class="media-body ms-3">
                    <p class="small text-primary text-uppercase mb-0">{{$latest->created_at}}</p>
                    <h6 class="mb-1"><a class="reset-anchor" href="{{route('post',$latest->id)}}">{{$latest->title}}</a></h6>
                    <p class="small text-muted">{!! $latest->discription !!}</p>
                  </div>
                </li>
                
              </ul>
              @endforeach
              @endisset
            </div>
            <!-- Instagram widget -->
            
          </div>
        </div>
      </div>
    </section>

    @endsection


    @section('custom')
     {{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
if ($("#comment_data").length > 0) {
$("#comment_data").validate({
rules: {
comment: {
required: true,

},
username: {
required: true,

},  
email: {
required: true,

},   
},
messages: {
comment: {
required: "Please enter comment",

},
username: {
required: "Please enter username",

},   
email: {
required: "Please enter email",

},
},
 submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                   $.ajax({
                    type: 'POST',
                    url: '{{ route("post-comment") }}',

                    
                    data: new FormData($("#comment_data")[0]),
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function (response) {
                       
                         // $('.blog_add_btn').html('Submit');
                         // $('.blog_add_btn').prop('disabled', false);

                       
                        document.getElementById("comment_data").reset();
                        location.reload();    
                    },
                    error: function (error) {
                       
                    }
                });
         
            }
})
}

</script>
    @endsection