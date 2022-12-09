{{--
  Template Name: pagina gracias cee
--}}
<?php session_start(); ?>
@section('header')
  <div class="     ">
    @include('sections.header-secondary')
    <section class="max-w-xs  lg:max-w-4xl mx-auto pb-36">
      <div class="grid lg:grid-cols-2  lg:mt-16">
        <div class="flex flex-col items-center mt-20">
            <h1 class="text-6xl text-center font-bold">¡<?= __('Muchas Gracias','sage') ?>!</h1>
            <p class="text-info text-xl  ">{{ __('Tu archivo está listo','sage') }}</p> 
            <p class="mt-5 text-xl font-semibold text-info">{{ __('Accede a la guía','sage') }}</p>
            <?php echo do_shortcode('[tagdownload docType="guia-cee" bg="px-20 bg-info rounded-xl font-bold text-white py-3 mt-1" ]');?>
          </div>
          <div class="">
            <img src="@asset('images/recursos/tablet-descarga-cee.png')" alt="" class="mx-auto   mt-5 lg:mt-0">
          </div>
        </div>
    </section>
  </div>
@endsection

@extends('layouts.layout-single-footer')
 
@section('content')
  <section class="max-w-xs sm:max-w-md md:max-w-xl lg:max-w-4xl xl:max-w-6xl mx-auto bg-info   rounded-[3rem] p-5 lg:p-10  mb-16"> 
       <h2 class="text-center text-white text-2xl lg:text-3xl mt-5 font-semibold">{{ __('También podría interesarte','sage') }}</h2>
       <div class="grid lg:grid-cols-3 mt-16 mb-5 gap-10">
          <div class="">
            <img src="@asset('images/gracias/1.png')" class="w-full">
            <p class="text-white font-semibold mt-3">{{ __('Conoce','sage') }}</p>
            <a href="#" class="text-white text-xl lg:text-2xl font-bold">
              {{ __('Facturación electrónica: la nueva normativa obligatoria para empresas españolas','sage') }}</a>
          </div>
          <div class="">
            <img src="@asset('images/gracias/2.png')" class="w-full">
            <p class="text-white font-semibold mt-3">{{ __('Conoce','sage') }}</p>
            <a href="#" class="text-white text-xl lg:text-2xl font-bold">
              {{ __('Novedades en la declaración del IRPF en España','sage') }}
            </a>
          </div>
          <div class="">
            <img src="@asset('images/gracias/3.png')" class="w-full">
            <p class="text-white font-semibold mt-3">{{ __('Conoce','sage') }}</p>
            <a href="#" class="text-white text-xl lg:text-2xl font-bold">{{ __('Guía básica para importar a España','sage') }}</a>
          </div>
       </div>
  </section>
@endsection


