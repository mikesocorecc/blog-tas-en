<footer class="bg-secondary py-10">
    <ul class="max-w-xs mx-auto sm:max-w-md md:max-w-xl lg:max-w-4xl xl:max-w-6xl grid grid-cols-1 lg:grid-cols-12 gap-5 ">
        <li class="col-span-12 lg:col-span-4 ">
          <img class="object-contain h-16" src="@asset('images/logoBlanco.png')">
          <p class=" text-light mt-8">
            {{__('El equipo de Tas Consultoría le ayuda a constituir una empresa en España en sólo 24 horas. A continuación, le ayudaremos con los trámites administrativos, contables, sociales y fiscales', 'sage')}}.
          </p>
        </li>
        {{-- https://tailwindcss.com/docs/hover-focus-and-other-states#using-arbitrary-variants --}}
        <li class="col-span-12 lg:col-span-2">
          <h6 class="text-light  font-bold text-lg">{{__('Menu', 'sage')}} </h6>
          <ul class="[&_li]:text-light  mt-4 space-y-2 [&_li]:cursor-pointer">
            <li class=""><a href="https://www.tas-consultoria.com/en/company-formation/"> {{ __('Creacion de empresas','sage') }}</a></li>
            <li class=""><a href="https://www.tas-consultoria.com/en/our-missions/tax-services/">{{ __('Fiscalidad','sage') }}</a></li>
            <li class=""><a href="https://www.tas-consultoria.com/en/our-missions/management-accounting/">{{ __('Contabilidad','sage') }}</a></li>
            <li class=""><a href="https://www.tas-consultoria.com/en/about-us/">¿{{ __('Quienes somos','sage') }} ?</a></li>
            <li class=""><a href="https://www.tas-consultoria.com/en/contact-us/">{{ __('Contactanos','sage') }}</a></li>
          </ul>
        </li> 
        <li class="col-span-12 lg:col-span-3">
          <h6 class="text-light  font-bold text-lg">{{ __('Blogs','sage') }}</h6>
          <ul class="[&_li]:text-light mt-4 space-y-2 [&_li]:cursor-pointer">
            <li class=""><a target="_blank" href="http://creersocieteespagne.com/">Créer une société en Espagne. (FR)</a></li>
            <li class=""><a target="_blank" href="http://tva-impots-espagne.over-blog.com/">TVA et impôts en Espagne. (FR)</a></li>
            <li class=""><a target="_blank" href="http://businessinspain.wordpress.com/">Start a business in Spain. (EN)</a></li>
            <li class=""><a target="_blank" href="http://asesoriabarcelona.wordpress.com/">Asesoría y Gestoría Barcelona. (ES)</a></li> 
          </ul>
        </li>  
        <li class=" col-span-12 lg:col-span-3">
          <h6 class="text-light  font-bold text-lg">{{ __('Contacto','sage') }}</h6>
          <ul class="[&_li]:text-light mt-4 space-y-2 [&_li]:cursor-pointer">
            <li class=""><i class="fa-solid fa-location-dot mr-2"></i> {{ __('Calle Floridablanca, n98 (Entresuelo 2a) 08015 Barcelona, Espagne','sage') }}.</li>
            <li class=""><i class="fa-solid fa-phone mr-2"></i> +34 937 37 75 25</li> 
            <li class=""><i class="fa-brands fa-skype mr-2"></i> tas.barcelona</li>
            <li class=""><i class="fa-solid fa-envelope mr-2"></i><a href="mailto:tasconsultoria@tas-sl.es">tasconsultoria@tas-sl.es</a></li>
            <li>
              <ul class="flex justify-between mt-6">
                <li class="border w-10 h-10 p-2 rounded-full flex items-center justify-center"><a target="_blank" href="https://www.facebook.com/tasconsultingEN"> <i class="fa-brands fa-facebook fa-xl"></i>  </a>   </li>
                <li class="border w-10 h-10 p-2 rounded-full flex items-center justify-center"><a target="_blank" href="https://twitter.com/TASConsultingEN">  <i class="fa-brands fa-twitter fa-xl"></i>  </a> </li>
                <li class="border w-10 h-10 p-2 rounded-full flex items-center justify-center"><a target="_blank" href="https://www.linkedin.com/company/tasconsultoriaen/">  <i class="fa-brands fa-linkedin fa-xl"></i>  </a> </li>
                <li class="border w-10 h-10 p-2 rounded-full flex items-center justify-center"><a target="_blank" href="https://www.instagram.com/tasconsultingen/">  <i class="fa-brands fa-instagram fa-xl"></i>  </a></li>
                <li class="border w-10 h-10 p-2 rounded-full flex items-center justify-center"><a target="_blank" href="https://www.tiktok.com/@tasconsultingen?">  <i class="fa-brands fa-tiktok fa-xl"></i>  </a></li>
              </ul>
            </li>
          </ul>
        </li>  
        <li class=" col-span-12 mt-2 border-b lg:col-start-2 lg:col-end-12"></li>
    </ul>
    <div class="container my-6">
      <form class="grid  gap-4 lg:gap-8 lg:grid-cols-3 justify-around items-center">
        <h6 class="text-light font-bold text-2xl lg:text-3xl lg:text-right">{{ __('Suscríbete a la biblioteca','sage') }}</h6>
        <input type="text" class="p-2 rounded-3xl text-center focus-visible:outline-none bg-white block" placeholder="{{ __('Introduzca su E-mail','sage') }}" autocomplete="off"> 
        <button class="bg-primary text-white rounded-xl p-2 font-semibold">{{ __('Suscribirse','sage') }}</button> 
      </form>
    </div>
</footer>
