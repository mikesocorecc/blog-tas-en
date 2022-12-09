<div class="max-w-xs mx-auto sm:max-w-md lg:max-w-6xl">
    <h4 class="text-info font-bold text-center text-3xl">{{ __('Completa el siguiente formulario','sage') }}</h4>
    <p class="text-white text-center  ">{{ __('y prepárate para disfrutar de nuestra','sage') }} <br>
        {{ __('guía sobre el PRIE','sage') }}</p>
    <form id="solicitud-guia" class="  mt-8 space-y-5">
        <input type="hidden" name="redireccion" value="">
        <div class="flex flex-col lg:flex-row space-y-3 lg:space-y-0">
            <label class="w-full lg:mr-8">
                <div class="lg:w-3/4  lg:ml-auto">
                    <span class="text-white w-full block">{{ __('Nombre','sage') }}*</span>
                    <input type="text" name="nombre" class="form-input w-full px-3 py-2 rounded-2xl   invalid-input valid-input" required>
                </div>
            </label>  
            <label class="w-full lg:mr-8 ">
                <div class="lg:w-3/4 mr-auto">
                    <span class="text-white w-full  block">{{ __('Correo electrónico','sage') }}*</span>
                    <input type="email" name="correo" class="form-input w-full  px-3 py-2 rounded-2xl   invalid-input valid-input" required>
                </div>
            </label>  
        </div> 
        <div class="flex flex-col lg:flex-row space-y-3 lg:space-y-0 ">
            <label class="w-full lg:mr-8">
                <div class="lg:w-3/4  lg:ml-auto">
                    <span class="text-white w-full block">{{ __('Sitio web de la empresa','sage') }}</span>
                    <input type="text" name="url"  class="form-input w-full px-3 py-2 rounded-2xl">
                </div>
            </label>  
            <label class="w-full lg:mr-8 ">
                <div class="lg:w-3/4 mr-auto">
                    <span class="text-white w-full  block">{{ __('Nombre de la empresa','sage') }}</span>
                    <input type="text" name="empresa" class="form-input w-full  px-3 py-2 rounded-2xl">
                </div>
            </label>  
        </div> 
        <div class="flex">
            <label class="w-full lg:ml-36  " > 
                    <input type="checkbox" name="suscripcion" class="form-checkbox     rounded-md mr-2">
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
            <div class=" lg:ml-36 lg:mr-32 w-full">
                <button type="submit" class="bg-info text-white w-full mr-32 block p-5 rounded-3xl font-bold text-2xl">{{ __('Quiero la guía','sage') }}</button>  
            </div>
        </div> 
    </form>
</div>
