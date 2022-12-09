@extends('layouts.app')

@section('content')
    <h2 class="text-3xl font-bold text-secondary text-center mb-12">
       <span class=" ">{{__('Categoria', 'sage')}}:  </span>
        <span class="before:block before:absolute  before:-inset-1   before:-skew-y-3 before:bg-info relative inline-block">
            <span class="relative text-white  ">{{ single_cat_title('') }}</span>
        </span>
    </h2>

    @while (have_posts())
        @php(the_post())
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    @endwhile

    {{-- Paginacion --}}
    @include('partials.pagination')
@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection
