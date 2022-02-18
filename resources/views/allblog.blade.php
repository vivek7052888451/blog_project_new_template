@extends('layouts.forntend.app')
@section('title')
 <title>{{env('APP_NAME')}} | All Blog</title>
@endsection
@section('content')
    <!-- Destinations -->

  <section class="pt-5">
      <div class="container">
        <h1>Featured Destinations</h1>
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis aliquid</p>
      </div>
      <div class="swiper destinations-slider swiper-padding">
        <div class="swiper-wrapper">
        	   @isset($blogs)
          @foreach($blogs as $blog)
          <div class="swiper-slide h-auto"><a class="destination d-flex align-items-end bg-center bg-cover" href="{{route('post',$blog->slug)}}" style="background: url('/backend/images/uploads/{{$blog->image}}')">
              <div class="destination-inner w-100 text-center text-white index-forward has-transition">
                <p class="small text-uppercase mb-0">{{$blog->title}}</p>
                
                <div class="btn btn-primary w-100 destination-btn text-white"></div>
              </div></a></div>
              @endforeach
           @endisset
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
  
    <!-- Divider Section -->
    <section class="py-5">   
      <div class="container py-4">
        <!-- Home listing -->
        @isset($latest_one)
        <div class="row align-items-stretch gx-lg-0">
          <div class="col-lg-6 order-2 order-lg-1 bg-full-left">
            <div class="h-100 bg-light d-flex align-items-center">
              <div class="py-5 px-4">
              
                <h3 class="h4"> <a class="text-reset" href="post.html">{{$latest_one->title}}</a></h3>
                <div class="text-muted">
                  <p>{!! $latest_one->discription !!}</p>
                 
                </div>
                <ul class="list-inline small text-uppercase mb-0">
                  <li class="list-inline-item align-middle"><img class="rounded-circle shadow-sm" src="img/person-1.jpg" alt="" width="30"/></li>
                  <li class="list-inline-item me-0 text-gray align-middle">By </li>
                  <li class="list-inline-item align-middle me-0"><a class="fw-bold reset-anchor" href="#!">Jason Doe</a></li>
                  <li class="list-inline-item text-gray align-middle me-0">|</li>
                  <li class="list-inline-item text-gray align-middle">{{$latest_one->created_at}}</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2"><a class="d-block h-100 bg-center bg-cover" href="post.html" style="background: url('/backend/images/uploads/{{$latest_one->image}}')"></a></div>
        </div>
        @endisset
      </div>
  
    </section>
    <!-- Instagram section-->
    <section class="pb-5">
      <div class="container pb-4">
        <header class="text-center mb-5">
          <h2>Top Blog</h2>
          <p>A place for your Instagram pictures or gallery.</p>
        </header>
        <div class="row">
        	 @foreach($blogs as $blog)
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="{{route('post',$blog->slug)}}"><img class="img-fluid" src="{{asset('/backend/images/uploads/'.$blog->image)}}" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>We travel not to escape life, but for life not to escape us.</h6>
              </div></a></div>
              @endforeach
        </div>
      </div>
    </section>
    <!-- Travel essentials section -->
   
    <!-- Subscribe section -->
   
    <!-- Top categories section -->
    <section class="py-5 bg-light">
      <div class="container py-4">
        <header class="mb-5 text-center">
          <h2>Top categories</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </header>
        @isset($blog_categorys)

        <div class="row text-center gy-4">
          @foreach($blog_categorys as $blog_category)
          <div class="col-lg-2 col-md-4 col-sm-6"><a class="reset-anchor d-block" href="{{route('category-list',$blog_category->slug)}}">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
               
                <img class="img-fluid" src="{{asset('/backend/images/category/'.$blog_category->category_icon)}}" alt="">
              </svg>
              <h3 class="h5">{{$blog_category->category_name}}</h3>
              <p class="text-muted text-sm"></p></a>
          </div>
          @endforeach

        </div>
        @endisset
      </div>
    </section>
    <!-- Sponsors section-->
    <section class="py-5">
      <div class="container py-4">
        
        <!-- Brands -->
        <div class="swiper sponsors-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide h-auto"><a href="#!"><img class="d-block mx-auto my-3 sponsor" src="img/brand-1.svg" alt=""></a></div>
            <div class="swiper-slide h-auto"><a href="#!"><img class="d-block mx-auto my-3 sponsor" src="img/brand-2.svg" alt=""></a></div>
            <div class="swiper-slide h-auto"><a href="#!"><img class="d-block mx-auto my-3 sponsor" src="img/brand-3.svg" alt=""></a></div>
            <div class="swiper-slide h-auto"><a href="#!"><img class="d-block mx-auto my-3 sponsor" src="img/brand-4.svg" alt=""></a></div>
            <div class="swiper-slide h-auto"><a href="#!"><img class="d-block mx-auto my-3 sponsor" src="img/brand-5.svg" alt=""></a></div>
            <div class="swiper-slide h-auto"><a href="#!"><img class="d-block mx-auto my-3 sponsor" src="img/brand-6.svg" alt=""></a></div>
          </div>
        </div>
      </div>
    </section>
@endsection