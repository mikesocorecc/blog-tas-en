@extends('layouts.app')

@section('content') 
  
      @while(have_posts()) @php(the_post())
      @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
      @endwhile  
  {{-- Paginacion --}}
  @include('partials.pagination')
 

@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
