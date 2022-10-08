<!DOCTYPE html>
<html lang="en">
<head>
    {{-- meta --}}
    @include('partials.meta')
        {{-- css --}}
    @include('partials.style')
    {{-- injectable script --}}
    @yield('styles')
</head>
<body>


      @include('partials.nav')
      
      <div class="my-5">
     {{-- Dynamic enject content --}}
        @yield('content')
  
      </div>
    

     {{-- script --}}
     @include('partials.script')

     {{-- injectable script --}}
     @yield('scripts')


</body>
</html>