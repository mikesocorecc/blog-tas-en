<div class="flex flex-col lg:flex-row my-2 text-sm">
  <div class="mr-2 [&_a]:text-dark [&_a]:font-semibold">
    {!!  get_the_category_list( ', ' ) !!}
  </div>
  <time class="updated" datetime="{{ get_post_time('c', true) }}">
    <span class="a">{{ __('Publicado el','sage') }} {{ get_the_date('d/m/Y') }} {{ __('por','sage') }} {{ get_the_author() }} </span>
  </time> 
</div>