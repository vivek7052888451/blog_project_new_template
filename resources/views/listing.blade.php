@extends('layouts.forntend.app')
@section('title')
 <title>{{env('APP_NAME')}} |Category</title>
@endsection

@section('content')

    <!-- Hero section -->
    <section class="hero bg-center bg-cover" style="background: url(/frontend/img/hero-banner.jpg)">
      <div class="dark-overlay py-5">
        <div class="overlay-content">
          <div class="container py-5 text-white text-center">
            <h1>Blog listing</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog listing -->

     <section class="pt-5">
      <div class="container pt-5">
        <div class="row mb-5">
          <div class="col-lg-8">
            <div class="row text-center">
           @isset($category_data)
           @foreach($category_data as $latest_category)
              <div class="col-lg-6 mb-5"><a href="post.html"><img class="img-fluid mb-4" src="{{asset('/backend/images/uploads/'.$latest_category->image)}}" alt=""/></a>
                <ul class="list-inline small text-uppercase mb-0">
                  <li class="list-inline-item me-0 text-gray align-middle">By </li>
                  <li class="list-inline-item align-middle me-0"><a class="fw-bold reset-anchor" href="#!">Jimmy Roy</a></li>
                  <li class="list-inline-item text-gray align-middle me-0">|</li>
                  <li class="list-inline-item text-gray align-middle">{{$latest_category->created_at}}</li>
                </ul>
                <h3 class="h4 mt-2"> <a class="reset-anchor" href="post.html">{{$latest_category->category_name}}</a></h3><a class="reset-anchor text-gray text-uppercase small mb-2 d-block" href="#!">Travel guide</a>
                <p class="text-small mb-1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p><a class="btn btn-link" href="index.html">Continue reading</a>
              </div>
              @endforeach
              @endisset
            </div>
            <!-- Listing navigation -->
            <div class="p-4 bg-light mb-5">
              <div class="row gy-2">
                <div class="col-sm-6 text-center text-sm-start"><a class="btn btn-outline-secondary btn-sm" href="#!"><i class="fas fa-angle-left me-2"></i>Prev posts</a></div>
                <div class="col-sm-6 text-center text-sm-end"><a class="btn btn-outline-secondary btn-sm" href="#!">Next posts<i class="fas fa-angle-right ms-2"></i></a></div>
              </div>
            </div>
          </div>
          <!-- Sidebar -->
          <div class="col-lg-4">
            <!-- About me widget -->
            <div class="mb-5 text-center"><img class="mb-3 rounded-circle img-thumbnail shadow-sm" src="img/author.jpg" alt="" width="110">
              <h3 class="h4">About me</h3>
              <p class="text-sm text-muted px-sm-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p><img class="d-block mx-auto mb-3" src="img/signature.png" alt="" width="60">
              <ul class="list-inline text-sm mb-0">
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-youtube"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-vimeo-v"></i></a></li>
              </ul>
            </div>
            <!-- Categories widget -->
            <div class="mb-5 text-center"><a class="category reset-anchor bg-cover bg-center mb-2" href="#!" style="background: url(img/category-1.jpg)">
                <p class="category-title text-uppercase small">Lifestyle</p></a><a class="category reset-anchor bg-cover bg-center mb-2" href="#!" style="background: url(img/category-2.jpg)">
                <p class="category-title text-uppercase small">Travel</p></a><a class="category reset-anchor bg-cover bg-center" href="#!" style="background: url(img/category-3.jpg)">
                <p class="category-title text-uppercase small">Vacation</p></a></div>
            <!-- Newsletter widget -->
            
            <!-- Latest posts widget -->
            @isset($latestposts)
            <div class="mb-5">
              <h3 class="h5">Latest posts</h3>
              <p class="text-sm text-muted mb-4">Lorem ipsum dolor sit, consectetur adipisicing elit, sed do eiusmod.</p>
              <ul class="list-unstyled">
                @foreach($latestposts as $latestpost)

                <li class="d-flex mb-1"><a href="{{route('post',$latestpost->slug)}}"><img src="{{asset('/backend/images/uploads/'.$latestpost->image)}}" alt="" width="80"></a>
                  <div class="media-body ms-3">
                    <p class="small text-primary text-uppercase mb-0">5 Aug 2018</p>
                    <h6 class="mb-1"><a class="reset-anchor" href="post.html">The top climbing tours</a></h6>
                    <p class="small text-muted">Lorem ipsum dolor sit, consectetur adipisicing elit, sed.</p>
                  </div>
                </li>
               @endforeach
               
              </ul>
            </div>
            @endisset
            <!-- Instagram widget -->
            <div class="mb-5">
              <h3 class="h5">Follow on Instagram</h3>
              <p class="text-sm text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
              <div class="row gx-0">
                <div class="col-3"><a class="instagram-item overlay-hover-dark-sm d-block w-100" href="#!">
                    <div class="overlay-content"><img class="img-fluid" src="img/instagram-1.jpg" alt=""></div></a></div>
                <div class="col-3"><a class="instagram-item overlay-hover-dark-sm d-block w-100" href="#!">
                    <div class="overlay-content"><img class="img-fluid" src="img/instagram-2.jpg" alt=""></div></a></div>
                <div class="col-3"><a class="instagram-item overlay-hover-dark-sm d-block w-100" href="#!">
                    <div class="overlay-content"><img class="img-fluid" src="img/instagram-3.jpg" alt=""></div></a></div>
                <div class="col-3"><a class="instagram-item overlay-hover-dark-sm d-block w-100" href="#!">
                    <div class="overlay-content"><img class="img-fluid" src="img/instagram-4.jpg" alt=""></div></a></div>
                <div class="col-3"><a class="instagram-item overlay-hover-dark-sm d-block w-100" href="#!">
                    <div class="overlay-content"><img class="img-fluid" src="img/instagram-5.jpg" alt=""></div></a></div>
                <div class="col-3"><a class="instagram-item overlay-hover-dark-sm d-block w-100" href="#!">
                    <div class="overlay-content"><img class="img-fluid" src="img/instagram-6.jpg" alt=""></div></a></div>
                <div class="col-3"><a class="instagram-item overlay-hover-dark-sm d-block w-100" href="#!">
                    <div class="overlay-content"><img class="img-fluid" src="img/instagram-8.jpg" alt=""></div></a></div>
                <div class="col-3"><a class="instagram-item overlay-hover-dark-sm d-block w-100" href="#!">
                    <div class="overlay-content"><img class="img-fluid" src="img/instagram-1.jpg" alt=""></div></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection