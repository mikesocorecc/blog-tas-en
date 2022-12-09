<header class="banner  bg-secondary lg:bg-transparent">

    <div class=" hidden lg:block container text-right pt-2 ">
        <a class="px-4 border border-white rounded-xl inline-block" href="http://www.tas-consultoria.com/">
            <i class="fa-solid fa-arrow-left"></i>
            <span class="text-white">{{ __('Volver a','sage') }} tas-consultoria.com {{ $bgHeader }} </span>
            
        </a>
    </div>
    <!-- Barra de navegacion desktop -->
    <div class="max-w-6xl mx-auto hidden  lg:flex flex-col lg:flex-row justify-between mt-10">
        <!-- Logo -->
        <a href="{{ home_url('/') }}" class=" ">
            <img class="object-contain h-28" src="@asset('images/logo_wt.svg')">
        </a>
        <!-- Telefono -->
        <div class="flex items-center">
            <a class=" text-white font-bold text-4xl" href="tel:+34937377525"> +34 937 3775 25</a>
        </div>
        {{-- Lenguajes --}}
        <div class="flex justify-between items-center">
            <a href="http://www.tas-consultoria.com/blog-en" role="button">
                <img width="37" height="37" class="mx-2 " src="@asset('images/icons/united-states-flag-icon.svg')" alt="">
            </a>
            <a class=" " href="http://www.tas-consultoria.com/blog-fr" role="button">
                <img width="37" height="37" class="mx-2 " src="@asset('images/icons/france-flag-icon.svg')" alt="">
            </a>
            <a class=" " href="http://www.tas-consultoria.com/blog-cn" role="button">
                <img width="37" height="37" class="mx-2 " src="@asset('images/icons/china-flag-icon.svg')" alt="">
            </a>
        </div>
    </div>

    <nav class="max-w-6xl mx-auto hidden lg:block">
        <!-- Menu movil -->
        <button class=" " type="button">
            <span class="  "></span>
        </button>
        <!-- Listado menu -->
        <div class="container" id=" ">
            <ul class="flex justify-between">
                @foreach ($menus as $menu)
                    <li class=" ">
                        <a class="text-white text-xl font-bold" aria-current="page" href="{{ $menu['url'] }}">
                            {{ $menu['menu'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>
  

    <nav class=" border-gray-200  px-2 sm:px-4 py-2.5   lg:hidden  pt-5">
        <div class="container  flex flex-wrap items-center justify-between mx-auto">
            <!-- Logo -->
            <a href="{{ home_url('/') }}" class="flex items-center ">
                <img class="h-10 mr-3 sm:h-9" src="@asset('images/logo_wt.svg')">
            </a>
            <div class="flex md:order-2 ">
                <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                    aria-expanded="false"
                    class="md:hidden text-white  focus-visible:outline-none     focus:outline-none      rounded-lg text-sm p-2.5 mr-1">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">{{ __('Buscar','sage') }}</span>
                </button>
                <button data-collapse-toggle="navbar-search" type="button"
                    class="inline-flex items-center p-2 text-sm text-white rounded-lg md:hidden  focus:outline-none    "
                    aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class=" @if(get_post_type() == 'recursos') fondo-header @else bg-[#bba8a840] @endif p-4 mt-4 items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                <div class="relative mt-3 md:hidden">
                    {{-- <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div> --}}
                    <form role="search" method="get" class="rounded-full bg-[#f4f4f4] flex justify-around"
                        action="{{ home_url('/') }}">
                        <label class="w-3/4">
                            <span class="sr-only">
                                {{ __('Buscar:', 'sage') }}
                            </span>

                            <input type="search" class="cero-shadow border-0  bg-[#f4f4f4] rounded-full p-2 focus-visible:outline-none w-full"
                                placeholder="{{ __('Haz una búsqueda aquí', 'sage') }}" value="{{ get_search_query() }}" name="s">
                        </label>
                        <button class=""><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <ul
                    class="flex flex-col   pl-0 pr-4 pt-4 pb-4 mt-4  rounded-lg   md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0   ">
                    @foreach ($menus as $menu)
                        <li class="cero-focus">
                            <a href="{{ $menu['url'] }}"
                                class="block py-2 pl-3 pr-4 text-white  cero-focus hover:border-b md:hover:bg-transparent md:border-0    md:p-0 focus-visible:outline-0 cero-focus  ">
                                {{ $menu['menu'] }}</a>
                        </li>
                    @endforeach
                    <li>
                        <div x-data="{ expanded: false }">
                            <button @click="expanded = ! expanded" class="text-white py-2 md:py-0 pl-3 pr-4 flex justify-between items-center w-full">
                                <div class="flex items-center w-full"> 
                                    <span>EN</span> 
                                    <img class="mx-2 w-5 h-5" src="@asset('images/icons/united-states-flag-icon.svg')">
                                </div>
                                <div x-bind:class="! expanded ? 'hidden' : ''">
                                    <i class="fa-solid fa-chevron-up"></i>
                                </div>  
                                <div x-bind:class=" expanded ? 'hidden' : ''"> 
                                    <i class="fa-solid fa-angle-down"></i> 
                                </div>
                            </button>

                            <ul x-show="expanded" x-collapse class=" mt-3 pl-6 border rounded-lg  bg-[#bba8a840]  ">
                                <li class=" py-0 pr-4 space-y-4">
                                    <a href="http://www.tas-consultoria.com/blog-en" role="button"
                                        class="flex items-center text-white">
                                        ES <img class="mx-2 w-5 h-5" src="@asset('images/icons/spain-flag-icon.svg')">
                                    </a>
                                    <a href="http://www.tas-consultoria.com/blog-fr" role="button"
                                        class="flex items-center text-white">
                                        FR <img class="mx-2 w-5 h-5" src="@asset('images/icons/france-flag-icon.svg')" alt="">
                                    </a>
                                    <a href="http://www.tas-consultoria.com/blog-cn" role="button"
                                        class="flex items-center text-white">
                                        CN <img class="mx-2 w-5 h-5" src="@asset('images/icons/china-flag-icon.svg')" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </nav> 
</header>
