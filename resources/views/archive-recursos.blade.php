@extends('layouts.layout-full')

@section('content')  
<div class="max-w-xs sm:max-w-lg lg:max-w-4xl xl:max-w-6xl mx-auto my-11">
    <h2 class="text-center lg:text-left text-3xl lg:text-5xl">
        ¡  {{__('Descarga tu contenido predilecto', 'sage')}} <br>
        <span class="font-bold">{{__('cuando lo necesites', 'sage')}}! </span>
    </h2> 
</div>
<section class="bg-blue  ">
    <div class="max-w-xs sm:max-w-lg  lg:max-w-4xl xl:max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 pb-20">
        <div class=" col-span-1 ml-1 w-full mx-auto">
            <p class=" text-center lg:text-left  pt-8 text-white text-xl font-semibold">{{__('Infografía', 'sage')}}</p>
            <h3 class="text-center lg:text-left text-white text-2xl lg:text-4xl font-bold mt-5 mb-20">{{__('ALQUILERES EN ESPAÑA', 'sage')}} <br>
                 {{__('PARA EXTRANJEROS', 'sage')}}</h3>
            <button class="bg-white rounded-2xl block mx-auto px-20 py-4 text-dark font-bold text-2xl lg:text-4xl"> {{__('DESCARGAR', 'sage')}}</button>
        </div>
        <div class="col-span-2 flex justify-center">
            <img class=" pt-10" src="@asset('images/banner-infografía.png')" alt="" srcset="">
        </div>
    </div>
</section>

@php($terminos = get_terms(array( 'taxonomy' => 'categoria'))) 

<div class="my-11">
    <div class="max-w-xs  lg:max-w-4xl xl:max-w-6xl mx-auto">
        <div id="filtrar" class="flex flex-col lg:flex-row">
            <h4 class="text-3xl font-bold mb-5 lg:mb-0">{{__('Categorías', 'sage')}}</h4>
            <div class="filtro__lista lg:ml-8 flex items-center space-x-3"> 
                @foreach ($terminos as $termino )
                <div class="flex items-center ">
                    <input class="filtro__item w-5 h-5 text-blue-600 bg-gris-100-100 rounded-none border-black focus:ring-blue-500  <?= $termino->slug ?>" type="checkbox" id="<?= $termino->slug ?>" value="<?= $termino->slug ?>">
                    <label class="ml-2 text-base font-bold text-black " for="<?= $termino->slug ?>"><?= $termino->name ?></label>
                </div>
                @endforeach  
            </div>
        </div>
    </div>
</div>  
<div id="lista-guias" class=" lista-guias max-w-xs sm:max-w-md lg:max-w-4xl mx-auto my-11">
    <div class="grid lg:grid-cols-2 gap-x-16 gap-y-16"> 
        @foreach ($terminos as $termino )
        {!!  filtrar_recursos($termino->slug) !!}
        @endforeach 
    </div>
</div>
@endsection

 
