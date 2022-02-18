@extends('layouts.forntend.app')
@section('title')
 <title>{{env('APP_NAME')}} |Home</title>
@endsection
@isset($blogs)
@section('content')
    <section class="pt-5">
      <div class="container">
        <h1>Featured Destinations</h1>
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aliquid</p>
      </div>
      <div class="swiper destinations-slider swiper-padding">
        <div class="swiper-wrapper">
          @foreach($blogs as $blog)
          <div class="swiper-slide h-auto"><a class="destination d-flex align-items-end bg-center bg-cover" href="{{route('post',$blog->slug)}}" style="background: url('/backend/images/uploads/{{$blog->image}}')">
              <div class="destination-inner w-100 text-center text-white index-forward has-transition">
                <p class="small text-uppercase mb-0">{{$blog->title}}</p>
                
                <div class="btn btn-primary w-100 destination-btn text-white"></div>
              </div></a></div>
              @endforeach
         
        </div>
        <div class="swiper-button-prev swiper-custom-nav text-uppercase letter-spacing-0">
          <svg class="svg-icon svg-icon me-1">
            <use xlink:href="#arrow-left-1"> </use>
          </svg><span class="text-sm">Prev</span>
        </div>
        <div class="swiper-button-next swiper-custom-nav text-uppercase letter-spacing-0"><span class="text-sm">Next</span>
          <svg class="svg-icon svg-icon ms-1">
            <use xlink:href="#arrow-right-1"> </use>
          </svg>
        </div>
      </div>
    </section>
    @endisset
    <!-- Divider Section -->
    
    <!-- Instagram section-->
    @isset($latest_blogs)
   

    <section class="pb-5">
      <div class="container pb-4">
        <header class="text-center mb-5">
          <h2>Latest Blog</h2>
          <p>A place for your Instagram pictures or gallery.</p>
        </header>
        <div class="row">
         @foreach($latest_blogs as $latest_blog)

          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="{{route('post',$blog->slug)}}"><img class="img-fluid" src="/backend/images/uploads/{{$latest_blog->image}}" alt="">

              <div class="instagram-item-overlay p-5">
                <h6>{{$latest_blog->title}}</h6>
               
              </div></a></div>
              @endforeach
        </div>
      </div>
    </section>
    @endisset
  
   
    <!-- Top categories section -->
    @isset($blog_categorys)

    <section class="py-5 bg-light">
      <div class="container py-4">
        <header class="mb-5 text-center">
          <h2>Top categories</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </header>
      
        <div class="row text-center gy-4">
            @foreach($blog_categorys as $blog_category)
          <div class="col-lg-2 col-md-4 col-sm-6 "><a class="reset-anchor d-block" href="{{route('category-list',$blog_category->slug)}}">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
               <img class="img-fluid" src="/backend/images/category/{{$blog_category->category_icon}}" alt="">
              </svg>
              <h3 class="h5">{{$blog_category->category_name}}</h3>
              <p class="text-muted text-sm"></p></a>
          </div>
          @endforeach
        </div>
        
      </div>
    </section>
    @endisset
    <!-- Sponsors section-->
   
    @endsection