{{--
  Template Name: Custom Template recurso cee
  Template Post Type: recursos
--}}
@section('header')
    <div class="  bg-[url('images/recursos/banner-cee.png')] h-full bg-no-repeat lg:bg-cover xl:bg-cover relative  ">
        @include('sections.header-infografias')
        <div class="max-w-xs mx-auto sm:max-w-md md:max-w-xl lg:max-w-4xl xl:max-w-5xl   lg:pt-0  pb-24    lg:pb-28 h-full  grid lg:grid-cols-2">
            <div class="pt-10 lg:pt-44">
                <p class="  text-2xl text-white font-semibold">{{ __('¿Cómo puedes crear', 'sage') }}</p>
                <h1 class="font-bold text-3xl text-white  lg:text-6xl leading-tight">{{ __('una empresa en España?', 'sage') }}</h1>
            </div>
        </div>
        <img src="@asset('images/recursos/flecha-abajo-celeste.svg')" class="absolute -translate-x-1/2 -bottom-12 left-1/2" alt="" srcset="">
    </div>
@endsection

@extends('layouts.layout-single-footer')


@section('content')
    <section class="max-w-xs mx-auto sm:max-w-md md:max-w-xl lg:max-w-4xl xl:max-w-5xl mt-20 lg:mt-28">
        <p class="mb-4 text-lg">{{ __('A modo de instrumento de referencia, si tienes en mente crear una empresa, esta guía práctica recoge todos los aspectos que tú, como emprendedor, deberás tener en cuenta para llevar a cabo tu iniciativa. Esta guía práctica del emprendedor ha sido redacta con el fin de aconsejarte, ayudarte y acompañarte en tu viaje de crear tu propia empresa en España','sage') }}.
        </p>

        <p class="mb-4 text-lg">
            {{ __('Abrir una empresa requiere de más que una buena idea, porque conforme avanzas en el proceso, las cosas aumentan en dificultad y de pronto estás tratando de entender un montón de cosas nuevas que antes quizá ni sospechabas que existían.','sage') }}
        </p>
        <p class="mb-4 text-lg">
            {{ __('En esta nueva Guía del emprendedor en España, encontrarás toda la información necesaria sobre las formas jurídicas que existen y los distintos criterios que te servirán para una mejor elección de la misma. Asimismo, tendrás a tu disposición la lista de pasos para ponerla en marcha junto a la información fiscal, contable y laboral necesaria una vez comenzada tu actividad empresarial.','sage') }}
        </p> 
        <div class="grid lg:grid-cols-2">
            <div class="">
                <h3 class="text-[#597af8] text-center lg:text-left text-4xl mt-28 font-bold mb-2">{{ __('Descarga nuestra guía','sage') }}</h3>
                <p class="text-xl text-center lg:text-left">{{ __('y elige el modelo de empresa','sage') }} <br>
                    {{ __('que mejor se ajuste a tu negocio','sage') }}</p>
            </div>
            <div class="mx-auto">
                <img src="@asset('images/recursos/telefono-mano.png')" alt="" srcset="">
            </div>
        </div>
    </section>
    <section class="bg-[#597af8] py-12  ">
        <div class="max-w-xs mx-auto sm:max-w-md md:max-w-xl lg:max-w-4xl xl:max-w-5xl">
            <h2 class="text-white text-4xl font-bold text-center lg:text-left">¿{{ __('Qué contenido encontrarás en esta guía','sage') }}?</h2>
            <ul class=" space-y-2 mt-10">
                <li class=" flex items-center space-x-3">
                    <x-check-yelow/>
                    <span class="text-white text-xl"> 
                        {{ __('La preparación inicial para la creación de tu empresa en España','sage') }}
                    </span>
                </li>
                <li class=" flex items-center space-x-3">
                    <x-check-yelow/>
                    <span class="text-white text-xl">
                      {{ __('Cómo elegir la forma jurídica adecuada','sage') }}
                    </span>
                </li>
                <li class=" flex items-center space-x-3">
                    <x-check-yelow/>
                    <span class="text-white text-xl">
                     {{ __('Información sobre los trámites para crear la empresa','sage') }}
                    </span>
                </li>
                <li class=" flex items-center space-x-3">
                    <x-check-yelow/>
                    <span class="text-white text-xl">
                   {{ __(' Datos valiosos sobre la fiscalidad ','sage') }}
                    </span>
                </li>
                <li class=" flex items-center space-x-3">
                    <x-check-yelow/>
                    <span class="text-white text-xl">
                        {{ __('Imposiciones tributarias de acuerdo a la forma jurídica que elijas','sage') }}
                    </span>
                </li>
                <li class=" flex items-center space-x-3">
                    <x-check-yelow/>
                    <span class="text-white text-xl">
                       {{ __(' Aspectos más relevantes para el establecimiento de tu empresa','sage') }}
                    </span>
                </li> 
            </ul>
            <p class="text-2xl text-white mt-6">
                {{ __('Este contenido es apto para cualquier persona, sin importar su nivel académico, socioeconómico o nacionalidad.','sage') }}
            </p>
        </div> 
    </section>

    <section class="  py-16 mb-4">
      <div class="max-w-xs mx-auto sm:max-w-md md:max-w-xl lg:max-w-4xl xl:max-w-5xl">
        <h4 class="text-verde font-bold text-left text-3xl">{{ __('Completa el siguiente formulario','sage') }}</h4>
        <p class="text-verde text-left font-semibold text-xl ">{{ __('para acceder al contenido y conocer todo sobre la factura electrónica','sage') }}</p>
        <form id="solicitud-guia" class="  mt-12 space-y-5" x-data="formRequest()" @submit.prevent="submitData">
            <input type="text" class=" hidden" name="redireccion"  x-model="formData.redireccion"> 
            <input type="text" class=" hidden" name="redireccion_succes" x-model="formData.redireccion_succes" value="gracias-por-obtener-la-guia-cee"> 
            <input type="hidden" name="tipo_recurso" value="cee" x-model="formData.tipo_recurso">
            <div class="flex flex-col lg:flex-row space-y-3 lg:space-y-0">
                <label class="w-full lg:mr-8 font-bold">
                    <div class="lg:w-full  lg:ml-auto">
                        <span class="text-verde w-full block">{{ __('Nombre','sage') }}*</span>
                        <input type="text" name="nombre"  x-model="formData.nombre" class="form-input w-full px-3 py-2 rounded-2xl   invalid-input valid-input" required>
                    </div>
                </label>  
                <label class="w-full lg:mr-8 font-bold ">
                    <div class="lg:w-full mr-auto">
                        <span class="text-verde w-full  block">{{ __('Correo electrónico','sage') }}*</span>
                        <input type="email" name="correo"  x-model="formData.correo" class="form-input w-full  px-3 py-2 rounded-2xl   invalid-input valid-input" required>
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
                        <input type="text" name="empleados"   x-model="formData.empleados"  class="form-input w-full px-3 py-2 rounded-2xl">
                    </div>
                </label>  
            </div> 
            <div class="flex flex-col lg:flex-row space-y-3 lg:space-y-0 ">
                <label class="w-full lg:mr-8 font-bold">
                    <div class="lg:w-full  lg:ml-auto">
                        <span class="text-verde w-full block">{{ __('Sitio web de la empresa','sage') }}</span>
                        <input type="text" name="url"  x-model="formData.url" class="form-input w-full px-3 py-2 rounded-2xl">
                    </div>
                </label>  
                <label for="" class="w-full lg:mr-8 font-bold"></label>
            </div> 
            <div class="flex">
                <label class="w-full    " > 
                        <input type="checkbox" name="suscripcion"  x-model="formData.suscripcion" class="form-checkbox  w-5 h-5   rounded-md mr-2 mb-1 cero-shadow">
                        <span class="text-[#597af8] font-bold text-2xl ">{{ __('Suscríbete a nuestra newsletter','sage') }}</span> 
                </label>   
            </div> 
            <div class="flex">
                <label class="w-full    " >
                    <p class="text-verde text-base  ">
                        {{ __('TAS Consultoría utiliza la información que proporcionas para comunicarte contenidos, productos y servicios relevantes para ti. TAS Consultoría no compartirá esta información ni la utilizará sin tu consentimiento. Puedes darte de baja para dejar de recibir notificaciones. Para más información','sage') }}, 
                        <a class="text-verde font-bold" href="#"> {{ __('consulta la Política de Privacidad de TAS Consultoría','sage') }}. </a>
                    </p>
                </label>   
            </div> 
            <div class="flex">
                <div class="  mt-8   mx-auto">
                    <button type="submit" 
                    class="bg-[#597af8] uppercase text-white   block px-16 lg:px-32 py-3 lg:py-2 rounded-3xl font-bold text-2xl"
                    x-text="buttonLabel"
                    :disabled="loading"
                    :class="loading ? 'bg-sky-700 cursor-not-allowed ' : ''"
                    >{{ __('Quiero la guía','sage') }}</button>  
                </div>
            </div> 
        </form>
    </div>
    </section>
@endsection

@include('sections.submit-form', ['page_gracias' => 'thanks-for-getting-the-guide-cee', 'tipo' => 'cee'])
