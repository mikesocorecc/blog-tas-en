<header class="banner  relative h-full   ">

    <div class=" hidden lg:block container text-right pt-2 ">
        <a class="px-4 border border-primary rounded-xl inline-block" href="http://www.tas-consultoria.com/">
            <i class="fa-solid fa-arrow-left"></i>
            <span>{{ __('Volver a', 'sage') }} tas-consultoria.com {{ $bgHeader }} </span>

        </a>
    </div>
    <!-- Barra de navegacion desktop -->
    <div class="lg:max-w-4xl xl:max-w-6xl mx-auto hidden  lg:flex flex-col lg:flex-row justify-between mt-10">
        <!-- Logo -->
        <a href="{{ home_url('/') }}" class=" ">
            <img class="object-contain lg:h-24 xl:h-28" src="@asset('images/logo.svg')">
        </a>
        <!-- Telefono -->
        <div class="flex items-center">
            <a class=" text-primary font-bold lg:text-xl xl:text-4xl" href="tel:+34937377525"> +34 937 3775 25</a>
        </div>
        {{-- Lenguajes --}}
        <div class="flex justify-between items-center">
            <a href="http://www.tas-consultoria.com/blog-es" role="button">
                <img width="37" height="37" class="mx-2 " src="@asset('images/icons/spain-flag-icon.svg')" alt="">
            </a>
            <a class=" " href="http://www.tas-consultoria.com/blog-fr" role="button">
                <img width="37" height="37" class="mx-2 " src="@asset('images/icons/france-flag-icon.svg')" alt="">
            </a>
            <a class=" " href="http://www.tas-consultoria.com/blog-cn" role="button">
                <img width="37" height="37" class="mx-2 " src="@asset('images/icons/china-flag-icon.svg')" alt="">
            </a>
        </div>
    </div>

    <nav class="max-w-6xl mx-auto  hidden lg:block">
        <!-- Menu movil -->
        <button class=" " type="button">
            <span class="  "></span>
        </button>
        <!-- Listado menu -->
        <div class="container" id=" ">
            <ul class="flex justify-between">
                @foreach ($menus as $menu)
                    <li class="cero-focus ">
                        <a class="text-primary text-xl font-bold cero-focus" aria-current="page" href="{{ $menu['url'] }}">
                            {{ $menu['menu'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav> 
    @include('partials.menu-movil',['classList' => (get_post_type() == 'recursos') ? "relative bg-secondary md:relative   z-30 left-0 right-0 " : "absolute md:relative   z-30 left-0 right-0"  ])

 





    {{-- SLIDER --}}
    <div id="default-carousel" class="relative   -z-3 md:hidden   @if (get_post_type() == 'recursos') hidden   @endif  " data-carousel="static">
 
        <!-- Carousel wrapper -->
        <div class="relative h-[33rem]   overflow-hidden    ">
            <!-- Item 1 -->
            <div class="   relative   bg-[url('images/bg-header-1.jpg')] bg-no-repeat bg-cover duration-700 h-full w-full ease-in-out" data-carousel-item="active">
                <div class=" pt-24      sm:px-20  ">
                    <p class="text-white text-center sm:text-left  font-thin text-6xl">Get your</p>
                    <h2 class="text-info font-extrabold text-4xl text-center sm:text-left mt-2">digital certificate</h2> 
                    <div class="flex pt-8">
                        <div class="flex flex-col  pl-16 sm:pl-0 ">
                            <div class="flex  items-center">
                                <img src="@asset('images/icon-time-1.png')" alt=" " class="w-11 h-11 invert-image-white    "> 
                                <p class="text-white text-2xl ml-4 leading-6">totally <br> online, in <br> 30 min</p>
                            </div>
                            <a target="_blank" href="https://certificados.gestiondirect.eu/" class="block uppercase bg-info mt-4 text-center mr-8 px-4 py-2 font-bold rounded-3xl text-white">Get</a>
                        </div>
                    </div>
                </div>
                <img src="@asset('images/personaje-header-1.png')" alt=" " class="w-48 bottom-0 right-0 sm:right-14 absolute   "> 
            </div> 
            <!-- Item 2 -->
            <div class="hidden   duration-700 bg-[url('images/hero_bg.png')] bg-no-repeat bg-cover absolute  h-full w-full ease-in-out" data-carousel-item>
                <div class=" pt-24    sm:px-20  ">
                    <div class="flex flex-col items-center">
                        <img src="@asset('images/prie.jpg')" alt=" " class="w-24 h-36 rounded-lg mt-8 ">
                        <h2 class="text-cyan font-bold text-2xl text-center mt-2">Invest in Spain</h2>
                        <p class="text-white">Find out how,</p>
                        <p class="text-white">with this Complete Guide</p>
                        <a href="{{home_url()}}/recursos/programa-de-residencia-parainversores-y-emprendedores" class="uppercase bg-info mt-4 px-12 py-2 rounded-3xl text-white">I want the guide</a>
                    </div>
                </div> 
            </div> 
            <!-- Item 3 -->
            <div class="hidden   duration-700 bg-[url('images/bg-header-1.jpg')] bg-no-repeat bg-cover absolute  h-full w-full ease-in-out" data-carousel-item>
                <div class=" pt-24    sm:px-20  ">
                    <p class="text-white text-center sm:text-left  font-thin text-6xl">Fet your</p>
                    <h2 class="text-info font-extrabold text-4xl text-center sm:text-left mt-2">digital certificate</h2> 
                    <div class="flex pt-8">
                        <div class="flex flex-col  pl-16 sm:pl-0 ">
                            <div class="flex  items-center">
                                <img src="@asset('images/icon-time-1.png')" alt=" " class="w-11 h-11 invert-image-white    "> 
                                <p class="text-white text-2xl ml-4 leading-6">totally <br> online, in <br> 30 min</p>
                            </div>
                            <a target="_blank" href="https://certificados.gestiondirect.eu/" class="block uppercase bg-info mt-4 mr-8 px-4 text-center py-2 font-bold rounded-3xl text-white">Get</a>
                        </div>
                    </div>
                </div>
                <img src="@asset('images/personaje-header-1.png')" alt=" " class="w-48 bottom-0 right-0 sm:right-14 absolute   "> 
            </div> 
            <!-- Item 3 -->
            {{-- <div class="hidden duration-700 absolute  h-full w-full ease-in-out" data-carousel-item>
                <div class="flex flex-col items-center">
                    <img src="@asset('images/prie.jpg')" alt=" " class="w-24 h-36 rounded-lg mt-8">
                    <h2 class="text-cyan font-bold text-2xl text-center mt-2">Invest in Spain</h2>
                    <p class="text-white">Find out how,</p>
                    <p class="text-white">with this Complete Guide</p>
                    <button class="uppercase bg-info mt-4 px-12 py-2 rounded-3xl text-white">I want the guide</button>
                </div>
            </div> --}}
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-20 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3   rounded-full border border-white" aria-current="false"
                aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3   rounded-full border border-white" aria-current="false"
                aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3   rounded-full border border-white" aria-current="false"
                aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-20 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-500 focus-visible:outline-none ">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6    " fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                    </path>
                </svg>
                <span class="sr-only z-10  ">Previous</span>
                <span class="hidden transform  translate-x-0 z-20"></span>
                <span class="hidden transition-all  inset-0 -translate-x-full"></span>
                <span class="hidden translate-x-full inset-y-0  "></span>
                <span
                    class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20 "></span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-20 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-500 focus-visible:outline-none   ">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6  " fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</header>
