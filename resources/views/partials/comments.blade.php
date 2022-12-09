@if (! post_password_required())
  <section id="comments" class="  ">


    @if (have_comments())
      <h2>
        {!!  sprintf(__('%1$s respuesta a &ldquo;%2$s&rdquo;', '%1$s responde a &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sage'), get_comments_number() === 1 ? _x('One', 'comments title', 'sage') : number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>') !!}
      </h2>

      <ol class="comment-list">
        {!! wp_list_comments(['style' => 'ol', 'short_ping' => true]) !!}
      </ol>

      @if (get_comment_pages_count() > 1 && get_option('page_comments'))
        <nav>
          <ul class="pager">
            @if (get_previous_comments_link())
              <li class="previous">
                {!! get_previous_comments_link(__('&larr; Comentarios antiguos', 'sage')) !!}
              </li>
            @endif

            @if (get_next_comments_link())
              <li class="next">
                {!! get_next_comments_link(__('Comentarios mas nuevos &rarr;', 'sage')) !!}
              </li>
            @endif
          </ul>
        </nav>
      @endif
    @endif

    @if (! comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments'))
      <x-alert type="warning">
        {{ __('los comentarios están cerrados.', 'sage')  }}
      </x-alert>
    @endif 
    @if(file_exists('wp-content/plugins/wpdiscuz/templates/comment/comment-form.php'))
        @php comments_template('wp-content/plugins/wpdiscuz/templates/comment/comment-form.php') @endphp
    @else
        {{-- @php comments_template('/partials/comments.blade.php') @endphp --}}
    @endif
  </section>
@endif
