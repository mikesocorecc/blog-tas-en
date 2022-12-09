<div class="flex justify-center lg:justify-start">
    {!! the_posts_pagination(array(
      'mid_size'  => 2,
      'prev_text' => '<div class="  inline-flex items-center">  <i class="fa-solid fa-arrow-left mt-1 mr-2"></i> Previous</div>',
      'next_text' =>'<div class="  inline-flex items-center"> Next<i class="fa-solid fa-arrow-right mt-1 ml-2 "></i> </div>',
    ) ) !!} 
</div>