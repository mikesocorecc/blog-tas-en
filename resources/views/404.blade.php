@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {{ __('Lo siento, pero la página que está intentando ver no existe.', 'sage')  }}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif
@endsection
