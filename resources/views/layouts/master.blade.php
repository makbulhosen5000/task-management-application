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

        @yield('content')


     {{-- script --}}
     @include('partials.script')

     {{-- injectable script --}}
     @yield('scripts')


</body>
</html>