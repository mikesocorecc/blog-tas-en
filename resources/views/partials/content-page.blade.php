@php(the_content())

{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav bg-slate-800"><p>' . __('Páginas:', 'sage'), 'after' => '</p></nav>']) !!}
