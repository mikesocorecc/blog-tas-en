{{--
  Template Name: Custom Template recurso tee
  Template Post Type: recursos
--}}
@section('header')
    <div class="  bg-[url('images/recursos/header-tee.png')] bg-no-repeat  bg-cover relative ">
        @include('sections.header')
        <div class="max-w-xs mx-auto sm:max-w-md md:max-w-xl lg:max-w-4xl xl:max-w-5xl pb-10  lg:pb-28 grid lg:grid-cols-2">
            <div class=" pt-16 lg:pt-72">
                <p class="  text-xl font-semibold">{{ __('¿Cuál es el tipo de empresa que se ajusta', 'sage') }}</p>
                <h1 class="font-bold text-3xl lg:text-6xl leading-tight">{{ __('a tu modelo de negocio?', 'sage') }} .</h1>

            </div>
        </div>
        <img src="@asset('images/recursos/flecha-abajo.png')" class="absolute -translate-x-1/2 -bottom-10 left-1/2" alt="" srcset="">
    </div>
@endsection

@extends('layouts.layout-single-footer')


@section('content')
    <section class="max-w-xs mx-auto sm:max-w-md  md:max-w-xl lg:max-w-4xl xl:max-w-5xl mt-16 -mb-2 lg:mb-16">
        <p class="mb-4 text-lg">{{ __('Hemos decidido avanzar un poco después de que tomaste finalmente la decisión de emprender tu propia empresa y nos situamos en el momento donde debes escoger cuál es la forma jurídica que mejor se ajusta al modelo de negocio que tienes en mente.','sage') }} </p>

        <p class="mb-4 text-lg">
            {{ __('Abrir una empresa requiere de más que una buena idea porque conforme avanzas en el proceso, las cosas aumentan en dificultad y de pronto estás tratando de entender un montón de cosas nuevas que antes quizás ni sospechabas que existían','sage') }}.</p>
        <p class="mb-4 text-lg">
           {{ __(' Por ejemplo, los diversos tipos de empresas que puedes abrir según su forma jurídica y cuáles son las implicaciones de cada una','sage') }}.</p>
        <p class="text-lg">
            {{ __('En la nueva Guía del Emprendedor en España encontrarás toda la información necesaria para conocer los tipos más comunes de empresas que puedes abrir en España, sus características e implicaciones','sage') }}.
        </p>
        <div class="grid lg:grid-cols-2">
            <div class="">
                <h3 class="text-yellow-500 text-4xl mt-28 font-bold mb-2 text-center lg:text-left">{{ __('Descarga nuestra guía','sage') }}</h3>
                <p class="text-xl text-center lg:text-left">{{ __('y elige el modelo de empresa','sage') }} <br>
                    {{ __('que mejor se ajuste a tu negocio','sage') }}</p>
            </div>
            <div class="mx-auto">
                <img src="@asset('images/recursos/tablet-mano.png')" class="mt-10 lg:mt-0" alt="" srcset="">
            </div>
        </div>
    </section>
    <section class="bg-verde py-16 mb-4">
        <div class="max-w-xs mx-auto sm:max-w-md md:max-w-xl lg:max-w-4xl xl:max-w-5xl">
            <h2 class="text-white text-2xl lg:text-4xl font-bold">¿ {{ __('Qué contenido encontrarás en esta guía','sage') }}?</h2>
            <ul class=" space-y-2 mt-10">
                <li class=" flex items-center space-x-3">
                    <x-check-yelow/>
                    <span class="text-white text-xl"> 
                      {{ __('Tipos de empresa por su personalidad jurídica','sage') }}
                    </span>
                </li>
                <li class=" flex items-center space-x-3">
                    <x-check-yelow/>
                    <span class="text-white text-xl">
                      {{ __('Aspectos a tener en cuenta al momento de elegir la forma jurídica de tu empresa','sage') }}
                    </span>
                </li>
                <li class=" flex items-center space-x-3">
                    <x-check-yelow/>
                    <span class="text-white text-xl">
                      {{ __('Distintos tipos de empresa según su forma jurídica','sage') }}
                    </span>
                </li>
                <li class=" flex items-center space-x-3">
                    <x-check-yelow/>
                    <span class="text-white text-xl">
                      {{ __('Tributación de los tipos de empresas y sociedades','sage') }} 
                    </span>
                </li>
                <li class=" flex items-center space-x-3">
                    <x-check-yelow/>
                    <span class="text-white text-xl">
                      {{ __('Capital inicial mínimo a aportar para la fundación de empresas','sage') }}
                    </span>
                </li>
                <li class=" flex items-center space-x-3">
                    <x-check-yelow/>
                    <span class="text-white text-xl">
                      {{ __('La responsabilidad de las empresas y sus socios ante terceros y deudas','sage') }}
                    </span>
                </li>
                <li class=" flex items-center space-x-3">
                    <x-check-yelow/>
                    <span class="text-white text-xl">
                      {{ __('El número mínimo de socios permitidos para la fundación de organizaciones','sage') }}
                    </span>
                </li>
            </ul>
        </div> 
    </section>

    <section class="  py-16 mb-4">
      <div class="max-w-xs mx-auto sm:max-w-md md:max-w-xl lg:max-w-4xl xl:max-w-5xl">
        <h4 class="text-verde font-bold text-left text-3xl">{{ __('Completa el siguiente formulario','sage') }}</h4>
        <p class="text-verde text-left font-semibold text-xl ">{{ __('para acceder al contenido y conocer todo sobre la factura electrónica','sage') }}</p>
        <form id="solicitud-guia" class="  mt-12 space-y-5" x-data="formRequest()" @submit.prevent="submitData">
            <input type="text" class=" hidden" name="redireccion" x-model="formData.redireccion" > 
            <input type="text" class=" hidden" name="redireccion_succes" x-model="formData.redireccion_succes" > 
            <input type="hidden" name="tipo_recurso" value="tee" x-model="formData.tipo_recurso">
            <div class="flex flex-col lg:flex-row space-y-3 lg:space-y-0">
                <label class="w-full lg:mr-8 font-bold">
                    <div class="lg:w-full  lg:ml-auto">
                        <span class="text-verde w-full block">{{ __('Nombre','sage') }}*</span>
                        <input type="text" name="nombre" x-model="formData.nombre" class="form-input w-full px-3 py-2 rounded-2xl   invalid-input valid-input" required>
                    </div>
                </label>  
                <label class="w-full lg:mr-8 font-bold ">
                    <div class="lg:w-full mr-auto">
                        <span class="text-verde w-full  block">{{ __('Correo electrónico','sage') }}*</span>
                        <input type="email" name="correo" x-model="formData.correo" class="form-input w-full  px-3 py-2 rounded-2xl   invalid-input valid-input" required>
                    </div>
                </label>  
            </div> 
            <div class="flex flex-col lg:flex-row space-y-3 lg:space-y-0 ">
              <label class="w-full lg:mr-8 font-bold ">
                  <div class="lg:w-full mr-auto">
                      <span class="text-verde w-full  block">{{ __('Nombre de la empresa','sage') }}</span>
                      <input type="text" name="empresa"  x-model="formData.empresa" class="form-input w-full  px-3 py-2 rounded-2xl">
                  </div>
              </label>  
                <label class="w-full lg:mr-8 font-bold">
                    <div class="lg:w-full  lg:ml-auto">
                        <span class="text-verde w-full block">{{ __('Núcleo de empleados','sage') }}</span>
                        <input type="text" name="empleados"  x-model="formData.empleados"  class="form-input w-full px-3 py-2 rounded-2xl">
                    </div>
                </label>  
            </div> 
            <div class="flex flex-col lg:flex-row space-y-3 lg:space-y-0 ">
                <label class="w-full lg:mr-8 font-bold">
                    <div class="lg:w-full  lg:ml-auto">
                        <span class="text-verde w-full block">{{ __('Sitio web de la empresa','sage') }}</span>
                        <input type="text" name="url"  x-model="formData.url"  class="form-input w-full px-3 py-2 rounded-2xl">
                    </div>
                </label>  
                <label for="" class="w-full lg:mr-8 font-bold"></label>
            </div> 
            <div class="flex">
                <label class="w-full    " > 
                        <input type="checkbox" name="suscripcion"   x-model="formData.suscripcion" class="form-checkbox  w-5 h-5   rounded-md mr-2 mb-1 cero-shadow">
                        <span class="text-verde font-bold text-2xl ">{{ __('Suscríbete a nuestra newsletter','sage') }}</span> 
                </label>   
            </div> 
            <div class="flex">
                <label class="w-full    " >
                    <p class="text-verde text-base  ">
                        {{ __('TAS Consultoría utiliza la información que proporcionas para comunicarte contenidos, productos y servicios relevantes para ti. TAS Consultoría no compartirá esta información ni la utilizará sin tu consentimiento. Puedes darte de baja para dejar de recibir notificaciones. Para más información','sage') }}, <a class="text-verde font-bold" href="#"> {{ __('consulta la Política de Privacidad de TAS Consultoría','sage') }}. </a>
                    </p>
                </label>   
            </div> 
            <div class="flex">
                <div class="  mt-8   mx-auto">
                    <button type="submit" 
                    class="bg-verde uppercase text-yellow-500   block px-16 lg:px-32 py-2 rounded-3xl font-bold text-2xl"
                    x-text="buttonLabel"
                    :disabled="loading"
                    :class="loading ? 'bg-sky-700 cursor-not-allowed ' : ''"
                    >{{ __('I want the guide','sage') }}</button>  
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

@include('sections.submit-form', ['page_gracias' => 'thanks-for-getting-the-guide-tee', 'tipo' => 'tee'])
