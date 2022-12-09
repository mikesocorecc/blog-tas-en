{{--
  Template Name: Custom Template recurso info arrendar en españa
  Template Post Type: recursos
--}}
@section('header')
    {{-- h-[100vh] --}}
    <div class="   relative ">
        @include('sections.header-secondary', ['class' => 'bg-[#d8cdc7] '])
        <div class="grid lg:grid-cols-2 max-w-xs  lg:max-w-full mx-auto">
            <img src="@asset('images/recursos/infografias/PORTADA-ARRENDAR.png')" class=" xl:-ml-6 mt-10 ">
            <div class=" flex flex-col justify-center">
                <p class="text-[#597af8] text-center text-2xl xl:text-5xl">{{ __('Cómo arrendar', 'sage') }}</p>
                <p class="text-[#597af8] text-center text-2xl xl:text-8xl font-extrabold">{{ __('un local', 'sage') }}</p>
                <div class="text-center">
                    <button class="bg-verde text-white xl:text-5xl py-4 px-20 mt-3 rounded-full">
                        {{ __('en España ', 'sage') }}
                    </button>
                </div>
            </div>
        </div>
        {{-- absolute -left-52 -bottom-20 --}}
    </div>
@endsection

@extends('layouts.layout-single-footer')


@section('content')
    <div class="mx-auto max-w-xs sm:max-w-lg lg:max-w-4xl grid lg:grid-cols-2   gap-20">
        <div class="flex flex-col justify-center xl:justify-center mt-16">
            <div class="">
                <img src="@asset('images/recursos/infografias/ICONOS-CONTRATO.png')" class="  ">
            </div>
            <h3 class="text-[#597af8] font-bold text-4xl">
                ¿{{ __('Qué es un contrato ', 'sage') }}
            </h3>
            <p class="text-[#597af8] text-4xl">
                {{ __('de arrendamiento comercial', 'sage') }} ?
            </p>
            <p class="mt-3">
                {{ __('Es un documento que regula la relación entre el arrendatario y el propietario del local, o arrendador.  Durante este proceso de alquiler de un local en España, el arrendador se compromete a proporcionar al arrendatario el uso de un inmueble a cambio de una contraprestación. ', 'sage') }}
            </p>
        </div>
        <div class="flex flex-col justify-center xl:-mt-52">
            <div class="">
                <img src="@asset('images/recursos/infografias/ICONOS-ALQUILER.png')" class="  ">
            </div>
            <h3 class="text-[#597af8] font-bold text-4xl">
                {{ __('El alquiler', 'sage') }}
            </h3>
            <p class="mt-3">
                {{ __('En general, el alquiler de un local comercial en España se paga mensualmente, en la primera semana del mes. ', 'sage') }}
            </p>

            <p class="mt-3">
                {{ __(' El arrendador no puede exigir el pago por adelantado de más de un mes de alquiler. El importe, el lugar y la forma de pago deben ser definidos libremente por las partes en el contrato. ', 'sage') }}
            </p>
            <p class="mt-3">
                {{ __(' La revisión del alquiler, el aumento o la disminución, se produce anualmente durante los primeros 5 años según el IPC (tasa de inflación).', 'sage') }}
            </p>
            <p class="mt-3">
                {{ __(' Salvo acuerdo en contrario de las partes, la fianza será igual a dos meses de alquiler. La fianza se revisa, al igual que el alquiler, al cabo de 5 años.', 'sage') }}
            </p>
        </div>
    </div>
    <div class="max-w-xs mx-auto sm:max-w-lg lg:max-w-4xl grid lg:grid-cols-2 gap-20 my-16">
        <div class="flex flex-col justify-start  ">
            <div class="">
                <img src="@asset('images/recursos/infografias/ICONOS-COMO-HAC.png')" class="  ">
            </div>
            <h3 class="text-[#597af8] font-bold text-4xl">
                ¿{{ __('Como realizar', 'sage') }}
            </h3>
            <p class="text-[#597af8] text-4xl">
                {{ __('un contrato de arrendamiento', 'sage') }} ?
            </p>
            <ul class="list-disc pl-5 mt-3">
                <li class="">{{ __('Identidad del propietario del local', 'sage') }}</li>
                <li class="">{{ __('Identidad del inquilino', 'sage') }}</li>
                <li class="">{{ __('Descripción del local', 'sage') }}</li>
                <li class="">{{ __('Duración del contrato', 'sage') }}</li>
                <li class="">{{ __('Alquiler acordado por las partes', 'sage') }}</li>
                <li class="">{{ __('Cláusulas establecidas', 'sage') }}</li>
            </ul>
        </div>
        <div class="flex flex-col justify-start  ">
            <div class="">
                <img src="@asset('images/recursos/infografias/ICONOS-REQUISIT.png')" class="  ">
            </div>
            <h3 class="text-[#597af8] font-bold text-4xl">
                {{ __('Requisitos para', 'sage') }}
            </h3>
            <p class="text-[#597af8] text-4xl">
                {{ __('arrendar un local comercial en España', 'sage') }} ?
            </p>
            <p class="mt-3">
                {{ __('El contrato de arrendamiento deberá estar acompañado de:', 'sage') }}
            </p>
            <ul class="list-decimal pl-5 mt-3 [&>li]:font-bold">
                <li class="">{{ __('Licencia de actividad ', 'sage') }}</li>
                <li class="">{{ __('Certificado de eficiencia energética', 'sage') }}</li>
                <li class="">{{ __('Plan de negocios', 'sage') }}</li>
            </ul>
        </div>
    </div>
    <div class="bg-[#031f2b]">
        <div class="mx-auto max-w-xs sm:max-w-lg  lg:max-w-4xl py-20">
            <h3 class="text-[#597af8] font-bold text-4xl text-center">
                {{ __('Rescisión del contrato ', 'sage') }}
                <span class="text-white">{{ __('y subarriendo', 'sage') }}</span>
            </h3>
            <div class="grid lg:grid-cols-2 mt-20 gap-20">
                <div class="flex flex-col space-y-10">
                    <div class="flex"> 
                        <img src="@asset('images/recursos/infografias/ICONO-1.png')" class=" w-16 h-20">
                        <p class="text-white ml-5">
                            {{ __('Cuando el objeto de un contrato de alquiler es el ejercicio de una actividad comercial o profesional en el local, el arrendatario es libre de ceder o subarrendar el contrato, no será necesario obtener el consentimiento previo del arrendador.', 'sage') }}
                        </p>
                    </div>
                    <div class="flex">
                        <img src="@asset('images/recursos/infografias/ICONO-2.png')" class=" w-16 h-20"> 
                        <p class="text-white ml-6">
                            {{ __('No obstante, el arrendatario está obligado a informar al arrendador por escrito con un mes de antelación e indicar los datos de la persona que va a subarrendar el inmueble. En caso contrario de no notificar, el arrendador podría solicitar nulidad del subarriendo ante el juzgado.', 'sage') }}
                        </p>
                    </div>
                    <div class="flex"> 
                        <img src="@asset('images/recursos/infografias/ICONO-3.png')" class="w-16 h-20">  
                        <p class="text-white ml-4 ">
                            {{ __('En el caso de un subarriendo parcial, el arrendador puede aumentar la renta en un máximo del 10%, o del 20% en el caso de un subarriendo o cesión total.', 'sage') }}
                        </p>
                    </div>
                    <div class="flex">
                        <img src="@asset('images/recursos/infografias/ICONO-4.png')" class="w-16 h-20">
                        <p class="text-white ml-4 ">
                            {{ __('Por su parte, si dentro de las condiciones del contrato de arrendamiento se especifica que está prohibido actividades de subarriendo, el inquilino no tendrá permitido realizar está acción bajo ninguna circunstancia.', 'sage') }}
                        </p>
                    </div>
                </div>
                <div class="">
                    <img src="@asset('images/recursos/infografias/tienda.png')" class="xl:-ml-32">
                    <div class=""> 
                        <div class="flex flex-col ">
                            <div class="flex items-center"> 
                                <img src="@asset('images/recursos/infografias/ICONO-5.png')" class="w-20 h-20">
                                <h4 class="text-[#597af8] font-bold text-lg ml-2">
                                    {{ __('El arrendamiento comercial puede hacerse tácito en los siguientes casos:','sage') }}
                                </h4>
                            </div>
                            <div class="[&>p]:mt-3">
                                <p class="text-white">
                                    {{ __('El impago de la fianza o del alquiler.','sage') }}
                                </p>
                                <p class="text-white">
                                    {{ __('No informar al propietario en caso de subarriendo.','sage') }}
                                </p>
                                <p class="text-white">
                                    {{ __('Realización de obras sin el consentimiento del propietario. Daños intencionados a las instalaciones.','sage') }}
                                </p>
                                <p class="text-white">
                                    {{ __('Realización de actividades ilegales, nocivas o insalubres en los locales.','sage') }}
                                </p>
                                <p class="text-white">
                                    {{ __('Incumplimiento de los trabajos de mantenimiento por parte del inquilino.','sage') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
