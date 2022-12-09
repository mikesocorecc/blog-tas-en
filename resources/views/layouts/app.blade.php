<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('saltar al contenido', 'sage') }}
</a>

@include('sections.header')
<div class="max-w-xs mx-auto sm:max-w-lg md:max-w-2xl lg:max-w-4xl  xl:max-w-6xl grid lg:grid-cols-12 gap-0  mt-2 lg:mt-16 mb-10  ">
    <main id="main" class="main lg:col-start-1 lg:col-end-8 xl:col-start-1 xl:col-end-9   ">
      @yield('content')
    </main>

    @hasSection('sidebar')
      <aside class="sidebar lg:col-start-9 lg:col-end-13 xl:col-start-10 xl:col-end-13   ">
        @yield('sidebar')
      </aside>
    @endif

</div>
@include('sections.footer')
