<form role="search" method="get" class="rounded-full bg-[#f4f4f4] hidden lg:flex justify-around " action="{{ home_url('/') }}">
  <label class="w-3/4">
    <span class="sr-only">
      {{ __('Buscar:', 'sage') }}
    </span>

    <input
      type="search"
      class=" bg-[#f4f4f4] rounded-full border-0 focus:shadow-none p-2  cero-shadow focus-visible:outline-none w-full"
      placeholder="{{ __('Haz una búsqueda aquí', 'sage')  }}"
      value="{{ get_search_query() }}"
      name="s"
    >
  </label> 
  <button class=""><i class="fa-solid fa-magnifying-glass"></i></button>
</form>
