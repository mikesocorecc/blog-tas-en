<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('saltar al contenido', 'sage') }}
</a>

    @yield('header')
    <main id="main" class="  ">
      @yield('content')
    </main>  
@include('sections.footer')
