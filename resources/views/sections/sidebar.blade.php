{{-- @php(dynamic_sidebar('sidebar-primary')) --}}
<div class="  h-full ">
    {!! get_search_form(false) !!}
    
    {{-- Card suscripcion --}}
    <div class="rounded-3xl bg-dark   w-[20rem] sm:max-w-sm lg:w-full h-auto mt-8 mx-auto px-8 py-12">
        <h3 class="text-cyan text-center font-bold  text-3xl">{{ __('Suscríbete', 'sage') }} <br>
            {{ __('a la biblioteca', 'sage') }}</h3>
        <p class="text-white mt-5 text-center">
            {{ __('La mejor fuente de información con útiles consejos y guías','sage') }}.
            <b>¡{{ __('Suscríbete', 'sage') }}!</b>
        </p>
        <form action="" class="mt-4">
            <input type="text" class="bg-white rounded-3xl w-full text-center p-2 focus-visible:outline-none "
                placeholder="{{ __('Introduzca su Email', 'sage') }}">
            <button
                class="bg-info rounded-3xl w-full  p-3 mt-4 text-white font-semibold">{{ __('Suscribirse', 'sage') }}</button>
            <label for="suscripcio_extra" class="mt-6 flex items-start">
                <input type="checkbox" class="mr-2 mt-2" name="" id="suscripcio_extra">
                <small class="text-white">
                    {{ __('También deseo recibir correos electrónicos de productos y servicios de TAS Consultoría. (Puede cancelar la suscripción cuando desee)','sage') }}</small>
            </label>
        </form>
    </div>
    {{-- Categorias --}}
    <div class="mt-7  sm:w-1/2 lg:w-full mx-auto">
        <div id="accordion-collapse" data-accordion="collapse">
            <h3><button type="button" id="accordion-collapse-heading-1"
                    class="flex items-center justify-between w-full py-2  text-left focus:bg-transparent hover:bg-transparent   rounded-t-xl focus:text-black focus:outline-none focus-visible:outline-none      "
                    data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                    aria-controls="accordion-collapse-body-1">
                    <span class="font-bold text-2xl">{{ __('Categorías', 'sage') }}</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
            </h3>
            <ul id="accordion-collapse-body-1" class="hidden mt-4 space-y-3"
                aria-labelledby="accordion-collapse-heading-1">
                @foreach ($categories as $category)
                    <li class="{{ $category['class'] }}">
                        <a href="{{ $category['link'] }}">{{ $category['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- SECCION ASESORES --}}
    <div class="mt-7 mb-10 h-auto relative block rounded-3xl text-center pb-8 w-[20rem] sm:max-w-sm lg:w-full mx-auto">
        <img class="w-full absolute -z-10 brightness-50" src="@asset('images/Asesores.png')" alt="">
        <h3 class="text-cyan font-bold text-2xl pt-48 ">{{ __('Contacta', 'sage') }}</h3>
        <p class="text-white">{{ __('con nuestro equipo ', 'sage') }}<br>
            {{ __('de asesores', 'sage') }}. </p>
        <p class="text-white mt-2">
            {{ __('Pide tu presupuesto', 'sage') }}
        </p>
        <a href="https://www.tas-consultoria.com/en/contact-us/"
            class="inline-block  bg-info rounded-2xl text-3xl    py-2  px-16 mt-4 text-white font-semibold">¡{{ __('gratis', 'sage') }}!</a>
    </div>
    {{-- Sticky elementos --}}
    <div class="pt-16 lg:sticky lg:top-1 lg:pt-0 space-y-8  ">
        <div class="flex flex-col ">
            <div class=" flex justify-center  rounded-3xl text-center pb-3">
                <img class="h-52 w-36" src="@asset('images/guia-empresa-espania.png')" alt="">
            </div>
            <h3 class="text-info font-bold text-center text-2xl   ">¡{{ __('Descarga gratis', 'sage') }}</h3>
            <p class="text-dark text-center mb-2">{{ __('la Guía Práctica del Emprendedor en España', 'sage') }}!
            </p>
            <div class="text-center">
                <a href="https://www.tas-consultoria.com/blog-es/wp-content/uploads/2022/10/Programa-de-Residencia-para-Inversores-y-Emprendedores-1.pdf"
                    class="bg-info rounded-2xl text-xl py-1  px-10 mt-4 text-white font-semibold">¡{{ __('AQUÍ', 'sage') }}!</a>
            </div>
        </div>
        <div class="flex flex-col ">
            <div class=" flex justify-center  rounded-3xl text-center pb-3">
                <img class="h-52 w-36" src="@asset('images/prie.jpg')" alt="">
            </div>
            <h3 class="text-info font-bold text-center text-2xl   ">¡ {{ __('Descarga gratis', 'sage') }}</h3>
            <p class="text-dark text-center">
                {{ __('la Guía Programa de residencia para inversores y emprendedores', 'sage') }} </p>
            <div class="text-center">
                <a href="{{ home_url() }}/recursos/residency-program-for-investors-and-entrepreneurs/"
                    class="inline-block bg-info rounded-2xl text-xl py-1  px-10 mt-4 text-white font-semibold">¡{{ __('AQUÍ', 'sage') }}!</a>
            </div>
        </div>
    </div>

</div>
