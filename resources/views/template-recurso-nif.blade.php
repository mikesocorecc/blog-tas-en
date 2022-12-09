{{--
  Template Name: Custom Template recurso nif
  Template Post Type: recursos
--}}
@section('header')
  <div class="  bg-[#3F509D]  relative ">
    @include('sections.header-infografias')
    <div class="mx-auto max-w-xs sm:max-w-lg lg:max-w-5xl  mt-20">
      <div class="flex flex-col  md:flex-row relative">
        <div class="block"> 
          <img src="@asset('images/recursos/infografias/hero-nif-person.png')" class="opacity-0 hidden lg:block">
          <img src="@asset('images/recursos/infografias/hero-nif-person.png')" class="mx-auto w-[50rem] absolute bottom-0 lg:-bottom-10">
        </div>
        <div class="pb-48">
          <h2 class="text-6xl font-bold text-white"> {{ __('Qué es el','sage') }}</h2> 
          <img src="@asset('images/recursos/infografias/nif.png')" class="w-56  mt-5">
          <p class="text-white mt-5">
          {{ __('El Número de Identificación Fiscal','sage') }} <br>
          (NIF) {{ __('es el código único que sirve','sage') }}<br>
          {{ __('para identificar a las personas físicas','sage') }}<br>
          {{ __('o jurídicas a efectos fiscales, por','sage') }}<br>
          {{ __('lo que es necesario para realizar','sage') }}<br>
          {{ __('cualquier trámite fiscal en territorio','sage') }}<br>
          {{ __('español','sage') }}.<br>
          </p>
          <p class="text-white mt-5">
            {{ __('El NIF es obligatorio y una garantía','sage') }}<br>
            {{ __('para cualquier relación comercial','sage') }},<br>
            {{ __('ya que está vinculado a una','sage') }}<br>
            {{ __('dirección registrada, por lo que','sage') }}<br>
            {{ __('puede ser rastreado y su','sage') }}<br>
            {{ __('autenticidad verificada','sage') }}.<br>
          </p>
        </div>
      </div>
    </div>
    
    <div style="height: 150px; overflow: hidden;" class="absolute bottom-0 left-0  right-0" >
      <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
        <path d="M-2.59,-1.48 C317.38,111.01 166.70,116.94 508.12,-3.45 L509.25,154.44 L0.00,150.00 Z" style="stroke: none; fill: #FFFFFF;">
        </path>
      </svg>
    </div>  
  </div>
@endsection

@extends('layouts.layout-single-footer')
 

@section('content')
  <section class="max-w-xs mx-auto lg:max-w-4xl mt-16 mb-32">
      <h2 class="text-2xl lg:text-4xl text-info font-bold pl-20   ">{{ __('Tipos de','sage') }} NIF</h2>
      <div class="grid gap-8 lg:grid-cols-2 mt-16">
          <img src="@asset('images/recursos/infografias/NIF-PARA-EMPRES.png')" class="mx-auto" alt=" ">
          <div class="">
              <h3 class="text-info text-2xl font-bold">NIF {{ __('para empresas','sage') }}</h3>
              <p class="mt-5 lg:mr-20 text-justify">
                {{ __('En el caso de las empresas, la solicitud del NIF debe realizarse ante la Agencia Tributaria exactamente un mes después de la fecha de registro de la persona jurídica, es decir, un mes después de la creación de la empresa. De hecho, sin este documento, la empresa no existe a efectos fiscales.','sage') }} 
              </p>
              <p class="mt-5 lg:mr-20 text-justify">
                {{ __('Se podría decir, por tanto, que el NIF es como el "carné de identidad" de las empresas. Existen diferentes formatos para identificar cada tipo de NIF, no sólo a nivel de persona física o jurídica, sino con una serie de variantes que indican las características específicas del titular.','sage') }}
              </p>
          </div>
      </div>
      <div class="grid gap-8 lg:grid-cols-2 mt-16">
          <img src="@asset('images/recursos/infografias/NIF-PARA-AUTÓNO.png')" class="mx-auto" alt=" ">
          <div class="">
              <h3 class="text-info text-2xl font-bold">NIF {{ __('para particulares','sage') }} <br>  {{ __('y autónomos','sage') }}</h3>
              <p class="mt-5 lg:mr-20 text-justify">
                {{ __('El NIF de las personas físicas es el mismo código que el de su documento de identidad, en el caso de los ciudadanos españoles será el del DNI y en el caso de los extranjeros residentes en España será el del NIE.','sage') }}
              </p> 
          </div>
      </div>
  </section>
  

  <section class="relative bgg-[url('images/recursos/infografias/cintillo-flecha.png')] h-52 xl:h-72  bg-no-repeat mb-96">
    <div class="relative z-50 pt-48 max-w-3xl mx-auto">
      <div class="grid lg:grid-cols-2 relative">
          <div class="">
            <h4 class="text-dark text-center  lg:text-white text-2xl font-bold mt-20 lg:mt-0 ">{{ __('Para que sirve el ','sage') }} NIF</h4>
            <p class="text-dark text-center lg:text-white">
              {{ __('Para qué sirve el','sage') }} NIF <br>
              {{ __('Como hemos dicho','sage') }},<br>
             {{ __(' el Número de Identificación','sage') }}<br>
              {{ __('Fiscal es necesario para','sage') }}<br>
              {{ __('cualquier tipo de operación','sage') }}<br>
             {{ __(' económica, ya que todas ellas','sage') }}<br>
              {{ __('deben ser declaradas','sage') }}<br>
              {{ __('a la Agencia Tributaria','sage') }} (AEAT). <br>
            </p>
          </div>
          <img src="@asset('images/recursos/infografias/DATAFONO.png')" class="lg:h-72 w-60   absolute  -translate-x-1/2  -top-28 left-1/2 lg:translate-x-0 lg:w-[32rem] lg:-right-10 lg:-top-[10rem]" alt=" ">
      </div> 
    </div>
    <img src="@asset('images/recursos/infografias/cintillo-flecha.png')" class="absolute w-full top-0 left-0 right-0 -z-50" alt=" ">
  </section>
  
  <section class="mx-auto max-w-xs sm:max-w-lg lg:max-w-2xl  py-16 mb-4"> 
    <h3 class="text-info text-2xl font-bold">{{ __('Cuándo se utiliza el','sage') }} NIF</h3>
    <p class="text-info mt-1 text-lg">{{ __(' En concreto, el','sage') }} NIF {{ __('debe aparecer en: Facturas emitidas por cualquier empresa o profesional establecido en España.','sage') }} </p>
      <div class="mt-8"> 
        <div class="flex items-center ">
          <img src="@asset('images/recursos/infografias/ICONOS-NIF-1.png')" class=" " alt=" ">
            <p class="">
              {{ __('Recibo o pago a cualquier trabajador dependiente en España.','sage') }}
            </p>
        </div>
        <div class="flex items-center ">
          <img src="@asset('images/recursos/infografias/ICONOS-NIF-2.png')" class=" " alt=" ">
            <p class="">
              {{ __('Recepción o pago de capitales mobiliarios en España o de bienes o valores situados en España.','sage') }}
            </p>
        </div>
        <div class="flex items-center ">
          <img src="@asset('images/recursos/infografias/ICONOS-NIF-3.png')" class=" " alt=" ">
            <p class="">
             {{ __(' Transferencia o adquisición de valores.','sage') }}
            </p>
        </div>
        <div class="flex items-center ">
          <img src="@asset('images/recursos/infografias/ICONOS-NIF-4.png')" class=" " alt=" ">
            <p class="">
              {{ __('Adquisición de activos financieros con rentabilidad implícita.','sage') }}
            </p>
        </div>
        <div class="flex items-center ">
          <img src="@asset('images/recursos/infografias/ICONOS-NIF-5.png')" class=" " alt=" ">
            <p class="">
              {{ __('Actos o documentos de constitución, adquisición, transmisión,
              modificación o extinción de derechos reales sobre bienes inmuebles.','sage') }}
            </p>
        </div>
        <div class="flex items-center ">
          <img src="@asset('images/recursos/infografias/ICONOS-NIF-6.png')" class=" " alt=" ">
            <p class="">
              {{ __('Operaciones con entidades de crédito.','sage') }}
            </p>
        </div>
        <div class="flex items-center ">
          <img src="@asset('images/recursos/infografias/ICONOS-NIF-7.png')" class=" " alt=" ">
            <p class="">
              {{ __('Aportación o percepción de planes de pensiones.','sage') }}
            </p>
        </div>
        <div class="flex items-center ">
          <img src="@asset('images/recursos/infografias/ICONOS-NIF-8.png')" class=" " alt=" ">
            <p class="">
             {{ __('Seguros o transacciones financieras.','sage') }}
            </p>
        </div>
      </div>
  </section>
  
@endsection