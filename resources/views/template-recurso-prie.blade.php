{{--
  Template Name: Custom Template recurso prie
  Template Post Type: recursos
--}}
@section('header')
  <div class="  bg-[#f3f2f0]  ">
    @include('sections.header')
    <div class="max-w-xs mx-auto sm:max-w-lg lg:max-w-4xl xl:max-w-6xl pb-10  lg:pb-28 grid lg:grid-cols-2">
      <div class="block lg:hidden"> 
        <img src="@asset('images/recursos/hero_landing1.png')" class="   ">
      </div>
      <div class="pt-2 lg:pt-28">
        <p class="text-info text-xl font-semibold">{{__('Estás un paso más cerca', 'sage')}}</p>
        <h1 class="font-bold text-3xl lg:text-6xl leading-tight">{{__('para Invertir', 'sage')}} <br> {{__('en España', 'sage')}}.</h1>
        <p class="text-lg">{{__('El Programa para Inversores y Emprendedores', 'sage')}} (PRIE) <br> {{__('puede ser tu gran aliado para lograrlo', 'sage')}} . </p>
        <p class="text-lg font-bold mt-2">{{__('Descubre de qué se trata con esta guía completa', 'sage')}}. </p> 
      </div>
      <div class="hidden lg:block"> 
        <img src="@asset('images/recursos/hero_landing1.png')" class="   ">
      </div>
    </div>
  </div>
@endsection

@extends('layouts.layout-single-footer')
 

@section('content')
  <section class="max-w-xs  mx-auto sm:max-w-lg lg:max-w-6xl mt-16">
      <h2 class="text-2xl lg:text-4xl text-center lg:px-56">¿ {{__('Tienes dudas sobre el proceso de solicitud a este programa', 'sage')}} ?</h2>

        <div class="max-w-3xl mx-auto mt-10 lg:mt-28">
          <h4 class= "text-center lg:text-left lg:ml-60 xl:ml-48 font-bold text-lg mb-3 text-secondary">{{__('Esta guía contiene', 'sage')}}:</h4>
        </div>
        <div class="max-w-xs sm:max-w-lg lg:max-w-3xl mx-auto bg-[#f3f2f0] p-5 mb-28 rounded-3xl relative flex flex-col lg:flex-row">  
            <img class="  px-20 pt-10 lg:pt-0 lg:px-0  mx-auto lg:mx-0  mb-8 lg:mb-0 lg:absolute lg:-left-16  lg:-top-1/2   " src="@asset('images/recursos/profesores.png')" alt="">
            <ul class="ml-8 lg:ml-60 xl:ml-48   card__list space-y-2">
              <li class="card_list__item ">{{__('Tipos de permisos que puedes solicitar con el PRIE', 'sage')}}</li>
              <li class="card_list__item">{{__('Documentos y requisitos necesarios', 'sage')}} </li>
              <li class="card_list__item">{{__('Categorías que incluye el programa', 'sage')}} </li>
              <li class="card_list__item"> ¿{{__('Cómo debe ser el perfil del solicitante', 'sage')}}?</li>
              <li class="card_list__item">¿{{__('Qué debe contener el plan de negocios', 'sage')}} ?</li>
              <li class="card_list__item">{{__('Modalidades del traslado intraempresarial', 'sage')}}  </li>
            </ul>
        </div>
  </section>

  <section class="bg-verde py-16 mb-4"> 
    <div class="max-w-xs mx-auto sm:max-w-md lg:max-w-6xl">
      <h4 class="text-info font-bold text-center text-3xl">{{ __('Completa el siguiente formulario','sage') }}</h4>
      <p class="text-white text-center  ">{{ __('y prepárate para disfrutar de nuestra','sage') }} <br>
          {{ __('guía sobre el PRIE','sage') }}</p> 
      <form  class="  mt-8 space-y-5" x-data="formRequest()" @submit.prevent="submitData">

          <input type="text" class=" hidden" name="redireccion" x-model="formData.redireccion" data-url="{{ home_url() }}"  value="{{ $_SERVER['REQUEST_URI'] }}"> 
          <input type="text" class=" hidden" name="redireccion_succes" x-model="formData.redireccion_succes" value="gracias-por-obtener-la-guia-prie"> 
          <input type="hidden" name="tipo_recurso" x-model="formData.tipo_recurso" >
          <div class="flex flex-col lg:flex-row space-y-3 lg:space-y-0">
              <label class="w-full lg:mr-8">
                  <div class="lg:w-3/4  lg:ml-auto">
                      <span class="text-white w-full block">{{ __('Nombre','sage') }}*</span>
                      <input type="text" name="nombre" x-model="formData.nombre" class="form-input w-full px-3 py-2 rounded-2xl   invalid-input valid-input" required>
                  </div>
              </label>  
              <label class="w-full lg:mr-8 ">
                  <div class="lg:w-3/4 mr-auto">
                      <span class="text-white w-full  block">{{ __('Correo electrónico','sage') }}*</span>
                      <input type="email" name="correo" x-model="formData.correo" class="form-input w-full  px-3 py-2 rounded-2xl   invalid-input valid-input" required>
                  </div>
              </label>  
          </div> 
          <div class="flex flex-col lg:flex-row space-y-3 lg:space-y-0 ">
              <label class="w-full lg:mr-8">
                  <div class="lg:w-3/4  lg:ml-auto">
                      <span class="text-white w-full block">{{ __('Sitio web de la empresa','sage') }}</span>
                      <input type="text" name="url" x-model="formData.url"  class="form-input w-full px-3 py-2 rounded-2xl">
                  </div>
              </label>  
              <label class="w-full lg:mr-8 ">
                  <div class="lg:w-3/4 mr-auto">
                      <span class="text-white w-full  block">{{ __('Nombre de la empresa','sage') }}</span>
                      <input type="text" name="empresa" x-model="formData.empresa"  class="form-input w-full  px-3 py-2 rounded-2xl">
                  </div>
              </label>  
          </div> 
          <div class="flex">
              <label class="w-full lg:ml-36  " >  
                      <input type="checkbox" name="suscripcion" x-model="formData.suscripcion" class="form-checkbox     rounded-md mr-2">
                      <span class="text-white ">{{ __('Suscríbete a nuestra newsletter','sage') }}</span> 
              </label>   
          </div> 
          <div class="flex">
              <label class="w-full lg:ml-36  " >
                  <p class="text-white text-base lg:mr-32">
                      {{ __('TAS Consultoría utiliza la información que proporcionas para comunicarte contenidos, productos y servicios relevantes para ti. TAS Consultoría no compartirá esta información ni la utilizará sin tu consentimiento. Puedes darte de baja para dejar de recibir notificaciones. Para más información','sage') }}, <a class="text-info font-bold" href="#"> {{ __('consulta la Política de Privacidad de TAS Consultoría','sage') }}. </a>
                  </p>
              </label>   
          </div> 
          <div class="flex">
              <div class="   lg:ml-36 lg:mr-32 w-full">
                  <button 
                  type="submit" 
                  class="bg-info text-white w-full mr-32 block p-5 rounded-3xl font-bold text-2xl" 
                  x-text="buttonLabel"
                  :disabled="loading"
                  :class="loading ? 'bg-sky-700 cursor-not-allowed ' : ''"
                  >Quiero la guía</button>  
              </div>
          </div> 
          <div class="text-center ">
              <p 
              class="text-white py-2 px-20 rounded-3xl  text-xl "
              x-text="message" 
              ></p>
          </div> 
      </form>
  </div>
  </section>
@endsection 
@include('sections.submit-form', ['page_gracias' => 'thank-you-for-getting-the-guide-prie', 'tipo' => 'prie'])
 