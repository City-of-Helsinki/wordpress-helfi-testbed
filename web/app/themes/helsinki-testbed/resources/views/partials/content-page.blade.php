<article @php(post_class())>
  @if ($printPageHeading)
    @include('partials.page-header')
  @endif

  <div class="entry-content">
    @if (get_the_excerpt())
      <p class="description alignwide">
        {{ get_the_excerpt() }}
      </p>
    @endif

    @if (get_the_post_thumbnail_url())
      <figure class="wp-block-image alignfull size-large wp-block-image--featured">
        <img src="{{ get_the_post_thumbnail_url(null, 'large') }}">
      </figure>
    @endif

    @php(the_content())
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
