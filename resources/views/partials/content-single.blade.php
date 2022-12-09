<article @php(post_class('single-article mt-10'))>
  <header>
    <h1 class="entry-title entry-title text-primary  text-2xl font-bold">
      {!! $title !!}
    </h1>

    @include('partials.entry-meta')
  </header>

  <div class="entry-content">
    @php(the_content())
  </div>

</article>

<section class="h-auto relative bg-radial-bottom-post grid grid-cols-1 lg:grid-cols-6 px-5 lg:px-24 py-10 mt-24 ">
  <div class="col-span-1 lg:col-span-2  mx-auto lg:mx-0">
    <img src="@asset('images/Suscribete.png')" alt="" class="lg:absolute -top-20 lg:h-72"> 
  </div>
  <div class="col-span-1 lg:col-span-4">
    <p class="text-xl text-center">{{ __('Encuentra aquí','sage') }}</p>
    <h5 class=" text-center text-3xl lg:text-4xl text-white font-bold mb-2">{{ __('Los contenidos que necesitas','sage') }}</h5>
    <p class="text-center text-xl">{{ __('para instalar tu negocio en España','sage') }}.</p> 
  </div>
</section>
<div class="bg-light   mt-20 rounded-xl">
  <h4 class="px-5 lg:px-14 pt-14   lg:text-2xl font-bold">¿{{ __('Qué te ha parecido este contenido','sage') }}?</h4>
  @php(comments_template())
</div>
<?php 
 
?>
 
