
       {{-- Now add bootstrap 5 to Header  --}}
@include('header')

{{-- app.blade.php is master page,
index.blade.php is child page,
about.blade.php is child page. --}}
@yield('content')

       {{-- Now add bootstrap 5 to Footer  --}}
@include('footer')
