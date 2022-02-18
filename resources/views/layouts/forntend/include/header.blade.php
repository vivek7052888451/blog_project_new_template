   <header class="header">
      <!-- Top bar -->
      <div class="py-2 bg-dark text-white">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-lg-4">
              <ul class="list-inline mb-0 text-sm">
                <li class="list-inline-item"><a class="reset-anchor" href="#!">About us</a></li>
                <li class="list-inline-item">|</li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!">Contact us</a></li>
              </ul>
            </div>
            <div class="col-lg-4 d-none d-lg-block text-center">
              <ul class="list-inline mb-0 small">
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-youtube"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-vimeo-v"></i></a></li>
              </ul>
            </div>

            <div class="col-lg-4 d-none d-lg-block text-end">
              <div class="dropdown text-sm">  @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                     @if(Auth::user()->role->id=='1')
                     <a href="{{route('admin.dashboard') }}" class="text-sm text-info-700 dark:text-gray-500 underline">{{Auth::user()->name}}</a>
                     @elseif(Auth::user()->role->id=='2')
                          <div class="text-sm text-info-700 dark:text-gray-500 underline">
                            <div class="dropdown text-sm"><a class="reset-anchor dropdown-toggle" id="destinations" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                              <div class="dropdown-menu dropdown-menu-end mt-3" aria-labelledby="destinations">  <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                              </div>
                            </div>
                          </div>
                   {{--<a href="{{route('user.dashboard') }}" class="text-sm text-info-700 dark:text-gray-500 underline">{{Auth::user()->name}}</a>--}}
                   
                     @else
                     null
                     @endif
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-info-700 dark:text-gray-500 underline">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-info-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
              @endif
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar 1 -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
        <div class="container text-center"><a class="navbar-brand mx-auto" href="{{route('home')}}"><img class="mb-2" src="{{ asset('frontend/img/blog.png')}}" alt="" width="140">
            <p class="text-sm text-uppercase text-gray mb-0"></p></a></div>
      </nav>
      <!-- Navbar 2 -->
      <nav class="navbar navbar-expand-lg navbar-light border-gray py-2 bg-light">
        <div class="container">
          <button class="navbar-toggler navbar-toggler-right mx-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item px-1">
               <a class="nav-link active" href="{{route('home')}}">Home</a>
              </li>
              
              <li class="nav-item px-1">
               <a class="nav-link " href="{{route('allblog')}}">Post</a>
              </li>
              {{--<li class="nav-item px-1 dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu text-center text-lg-start shadow-sm" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item" href="index.html">Home</a><a class="dropdown-item" href="listing.html">Category</a><a class="dropdown-item" href="post.html">Post</a></div>
              </li>--}}
            </ul>
          </div>
        </div>
      </nav>
    </header>