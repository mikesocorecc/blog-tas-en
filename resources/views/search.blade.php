@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {{ __('Lo sentimos, no se encontraron resultados.', 'sage') }}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php(the_post())
    @include('partials.content-search')
  @endwhile

  {{-- {!! get_the_posts_navigation() !!} --}}
  @include('partials.pagination')
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection