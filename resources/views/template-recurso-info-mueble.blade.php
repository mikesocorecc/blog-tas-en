{{--
  Template Name: Custom Template recurso info mueble
  Template Post Type: recursos
--}}
@section('header')
    {{-- h-[100vh] --}}
    <div class=" bg-[#d8cdc7]    relative ">
        @include('sections.header-secondary', ['class' => 'bg-[#d8cdc7] '])
        <img src="@asset('images/recursos/infografias/casa.png')" class=" -ml-56 mt-10 ">

        <div class="max-w-4xl mx-auto mt-0 relative">
            <span
                class="bg-verde font-semibold lg:text-lg py-2 lg:px-10 rounded-3xl w-full block text-[#597af8] text-center">¿{{ __('Cómo comprar o alquilar un inmueble en España', 'sage') }}</span>
            <h2 class="text-[#597af8] text-4xl lg:text-5xl pt-2 text-center font-bold">{{ __('si soy extranjero', 'sage') }}?</h2>
        </div>
        {{-- absolute -left-52 -bottom-20 --}}
    </div>
@endsection

@extends('layouts.layout-single-footer')


@section('content')
    <div class="bg-[#d8cdc7] pt-16">
<span class="bg-verde text-[#597af8] text-lg pl-52 py-2 pr-10 rounded-r-3xl ">
{{ __('Comprar','sage') }}
</span>
        <section class="mx-auto max-w-xs sm:max-w-lg  lg:max-w-4xl   bg-[#d8cdc7] ">
            <p class="text-[#597af8] text-xl pt-10 ">
                {{ __('Si te interesa comprar una propiedad o un piso primero asegúrate de tener a la mano cierta información', 'sage') }}
            </p>
            <div class="grid lg:grid-cols-2 gap-16 mt-10">
                <div class="flex"> 
                    <img src="@asset('images/recursos/infografias/Ultimos-recibos.png')" class="w-16 h-20  ">
                    <div class="ml-2">
                        <h4 class="text-[#597af8] font-bold text-2xl ">
                            {{ __('Últimos recibos al día', 'sage') }}
                        </h4>
                        <p class="text-black">
                            {{ __('Consulta el Registro de propiedad y los últimos recibos correspondientes. Así evitaras sorpresas en futuros recargos económicos', 'sage', ) }}
                        </p>
                    </div>
                </div>
                <div class="flex"> 
                    <img src="@asset('images/recursos/infografias/Cedula-de-habit.png')" class="w-16 h-20   ">
                    <div class="ml-2">
                        <h4 class="text-[#597af8] font-bold text-2xl ">
                            {{ __('Cédula de habitabilidad', 'sage') }}
                        </h4>
                        <p class="text-black">
                            {{ __('Por último asegúrate de que el inmueble cuente con una cédula de habitabilidad', 'sage',) }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid lg:grid-cols-2 gap-16 mt-10">
                <div class="flex"> 
                    <img src="@asset('images/recursos/infografias/Impuesto-sobre-.png')" class="w-16 h-20   ">
                    <div class="ml-2">
                        <h4 class="text-[#597af8] font-bold text-2xl ">
                            {{ __('Impuesto Sobre Bienes Inmuebles', 'sage') }}
                        </h4>
                        <p class="text-black">
                            {{ __( 'Para ello, también puedes solicitar el último recibo del Impuesto Sobre Bienes Inmuebles', 'sage', ) }}
                        </p>
                    </div>
                </div>
                <div class="flex"> 
                    <img src="@asset('images/recursos/infografias/Certificado-de-.png')" class=" w-16 h-20  ">
                    <div class="ml-2">
                        <h4 class="text-[#597af8] font-bold text-2xl ">
                            {{ __('Certificado de eficiencia energética', 'sage') }}
                        </h4>
                        <p class="text-black">
                            {{ __('Para ello, también puedes solicitar el último recibo del Impuesto Sobre Bienes Inmuebles', 'sage',) }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid lg:grid-cols-2 gap-16 mt-10 mb-16">
                <div class="flex"> 
                    <img src="@asset('images/recursos/infografias/Documentos-nece.png')" class=" w-16 h-20  ">
                    <div class="ml-2">
                        <h4 class="text-[#597af8] font-bold text-2xl ">
                            {{ __('Qué documentos son necesarios', 'sage') }}
                        </h4>
                        <p class="text-black">
                            {{ __( 'Número de Identificación Extranjero (NIE) Banco español Contrato de arras Notario Público Representante fiscal ', 'sage', ) }}
                        </p>
                    </div>
                </div>
                <div class="flex"> 
                     
                </div>
            </div> 
        </section>
<span class="bg-verde text-[#597af8] text-lg pl-52 py-2 pr-10 rounded-r-3xl   ">
  {{ __('Alquilar','sage') }}
</span>
<section class="mx-auto max-w-xs sm:max-w-lg  lg:max-w-4xl   bg-[#d8cdc7] ">
  <p class="text-[#597af8] text-xl pt-10 ">
      {{ __('Si en tu caso, te interesa únicamente alquilar un piso, por lo general los contratos tienen una duración mínima de un año y los requisitos son los siguientes ', 'sage') }}
  </p>
  <div class="grid lg:grid-cols-2 gap-16 mt-10">
      <div class="flex"> 
          <img src="@asset('images/recursos/infografias/Pasaporte-de-la.png')" class="w-16 h-20  ">
          <div class="ml-2">
              <h4 class="text-[#597af8] font-bold text-2xl ">
                  {{ __('Pasaporte de la Comunidad europea /NIE / tarjeta de residencia de extranjero', 'sage') }}
              </h4>
              <p class="text-black">
                  {{ __('Para alquilar necesitarás un documento que te identifique : puede ser pasaporte de la Comunidad europea, NIE  o tarjeta de residencia de extranjero En algunos casos, el propietario solicitará que firmen el contrato todos los mayores de edad que habitarán en el inmueble', 'sage', ) }}
                </p>
          </div>
      </div>
      <div class="flex flex-col"> 
          <div class="flex"> 
            <img src="@asset('images/recursos/infografias/Deposito-o-fian.png')" class="w-16 h-20  ">
            <div class="ml-2">
                <h4 class="text-[#597af8] font-bold text-2xl ">
                    {{ __('Depósito / fianza', 'sage') }}
                </h4>
                <p class="text-black">
                    {{ __('Es necesario que canceles un mes por adelantado, y pagues un depósito o fianza, el cual habitualmente corresponde a 2 meses de alquiler ', 'sage',) }}
                  </p>
            </div>
          </div>
          <div class="flex mt-5"> 
            <img src="@asset('images/recursos/infografias/Comision-por-in.png')" class=" w-16 h-20  ">
            <div class="ml-2">
                <h4 class="text-[#597af8] font-bold text-2xl ">
                    {{ __('Comisión por inmobiliaria', 'sage') }}
                </h4>
                <p class="text-black">
                    {{ __('Y, si estás realizando el trámite a través de una inmobiliaria, esta solicitará un mes de comisión', 'sage',) }}
                  </p>
            </div>
        </div>
      </div>
  </div>
  <div class="grid lg:grid-cols-2 gap-16 mt-10">
      <div class="flex"> 
          <img src="@asset('images/recursos/infografias/Contrato-de-tra.png')" class="w-16 h-20   ">
          <div class="ml-2">
              <h4 class="text-[#597af8] font-bold text-2xl ">
                  {{ __('Contrato de trabajo', 'sage') }}
              </h4>
              <p class="text-black">
                  {{ __( 'Además, deberás contar con un contrato de trabajo  y poseer las ultimas nominas en la que se justifican tus ingresos  ', 'sage', ) }}
                </p>
          </div>
      </div>
      <div class="flex"> 
        <img src="@asset('images/recursos/infografias/Avalista.png')" class=" w-16 h-20  ">
        <div class="ml-2">
            <h4 class="text-[#597af8] font-bold text-2xl ">
                {{ __('Avalista', 'sage') }}
            </h4>
            <p class="text-black">
                {{ __( 'Por último, dependiendo del dueño del inmueble es posible que necesites de un avalista para realizar el contrato, el cual cumplirá función de fiador y representante ', 'sage', ) }}
            </p>
        </div>
    </div>
  </div> 
</section>
<div class="bg-[#597af8] pt-20 mt-20">
  <div class="mx-auto max-w-xs sm:max-w-lg  lg:max-w-4xl grid lg:grid-cols-2 lg:gap-28">
      <div class="mb-10"> 
            <p class="text-lg text-justify">
              {{ __('Ahora que ya has conocido cómo puedes comprar o alquilar un inmueble en España','sage') }}
            </p> 
            <p class="text-white text-lg mt-4 lg:mt-2">
              ¿{{ __('Qué esperas para iniciar tu aventura y adquirir','sage') }}
            </p>
            <h4 class="text-4xl text-white font-bold leading-8 mt-4 lg:mt-0">
              {{ __('la propiedad de tus sueños','sage') }}?
            </h4>

            <p class="text-black text-lg mt-8 lg:mt-5">
              ¿{{ __('Nuestros expertos en TAS Consultoría están listos para asesorarte en cada paso que des.','sage') }}
            </p>
            <h4 class="text-2xl leading-7 text-black font-bold mt-5 lg:mt-0">
              ¡{{ __('Tú solo dinos en qué ciudad te gustaría instalarte y nosotros nos encargamos del resto','sage') }}!
            </h4>
      </div>
      <div class="">
        <img src="@asset('images/recursos/infografias/Empresario.png')" class=" mx-auto lg:mx-0">
        
      </div>
  </div>
</div>
    </div>
@endsection
