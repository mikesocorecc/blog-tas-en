<article @php(post_class('mb-10 first:mt-10 lg:first:mt-0 lg:mt-20  articulos-recientes'))>
  <header class="hidden sm:block">
    <h2 class="entry-title text-primary text-xl lg:text-2xl font-bold">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h2>
    @include('partials.entry-meta')
    {{ the_content( __( 'Leer más <span class="bg-red-500">&rarr;</span>', 'sage' ) ) }}


  </header>
  <div class="entry-summary">
    {{-- @php(the_excerpt()) --}}
  </div>

  <div x-data="{ open: false }" class="h-auto sm:hidden  py-3 sm:py-6 flex flex-col items-center justify-center relative overflow-hidden ">
    <div  @click="open = ! open" class=" bg-blue-100 w-full rounded flex justify-between items-stretch">
      <div class="grid grid-cols-4 gap-2  ">
         
         {{ get_the_image( array( 'scan' => true, 'image_class' => 'w-16 h-16 rounded-full col-span-1' ) ) }}
         <div class="col-span-3 flex flex-col justify-end  ">
           <h2 class="w-full text-dark text-sm lg:text-2xl font-bold pb-5  "> 
               {!! $title !!} 
           </h2> 
           <div x-bind:class=" open ? 'hidden' : ''"> 
             <span class="before:block before:absolute before:left-0 before:bottom-0 before:right-0   before:border-b-2 relative block">
          </div>
          </span>
         </div>
      </div>
        <div class="flex flex-col justify-end">
          <div x-bind:class=" open ? 'hidden' : ''"> 
            <i  class="fa-solid fa-chevron-right mx-4 pb-14 text-info"></i>
          </div>
          <div x-bind:class="! open ? 'hidden' : ''">
            <i class="fa-solid fa-chevron-down mx-4 pb-14 text-info"></i>
          </div>
          <div x-bind:class=" open ? 'hidden' : ''">  
              <span class="before:block before:absolute before:left-0 before:bottom-0 before:right-0   before:border-b-2 relative block">
        </div>
          </span>
        </div>
    </div> 
    {{-- <span class="border-b border-black   w-3/4 col-end-4"></span> --}}
    <div x-show="open" @click.outside="open = false"  x-transition:enter="transition ease-out duration-300"
          x-transition:enter-start="opacity-0 translate-y-0"
          x-transition:enter-end="opacity-100 translate-y-0"
          x-transition:leave="transition ease-in duration-300"
          x-transition:leave-start="opacity-100 translate-y-10"
          x-transition:leave-end="opacity-0 translate-y-0" class="w-full bg-white pl-[70px] pb-5 excerpt_movil  ">
          {{ the_content( __( 'Leer más <span class="">&rarr;</span>', 'sage' ) ) }} 
          <div class="w-full">
            <span class="before:block before:absolute before:left-0 before:-bottom-5 before:right-0   before:border-b-2 relative block">
          </div>
    </div>
  </div>
</article>
