<!DOCTYPE html>
<html>
  <head>
   @yield('title')
   @include('layouts.forntend.include.headerlink')
   <style>
    form .error {
  color: #ff0000;
}
</style>
  </head>
  <body>
    <!-- Header-->
 @include('layouts.forntend.include.header')
    <!-- Destinations -->
 @yield('content')
     @include('layouts.forntend.include.footer')
    <!-- JavaScript files-->
  @include('layouts.forntend.include.footerlink')

  @yield('custom')
  </body>
</html>