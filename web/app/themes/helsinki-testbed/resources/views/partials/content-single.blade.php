<article @php(post_class())>
  @if ($printPageHeading)
    <header class="entry-header">
      @if (function_exists('yoast_breadcrumb'))
        {{ yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ) }}
      @endif

      <h1 class="entry-title">
        @php(the_title())
      </h1>

      @include('partials/entry-meta')
    </header>
  @endif

  <div class="entry-content">
    @if (get_the_post_thumbnail_url())
    <div class="koro koro--basic white top">
      </div>
      <figure class="wp-block-image alignfull size-large wp-block-image--featured">
        @php(the_post_thumbnail('large', ['sizes' => '100vw']))
      </figure>
    @endif

    @if (get_the_excerpt())
      <p class="description">
        {{ get_the_excerpt() }}
      </p>
    @endif

    @php(the_content())

  </div>

  <x-related-content
    :type="$related->type"
    :label="$related->label"
    :query="$related->query"
    :category="$related->category"
  />

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

  @php(comments_template())
</article>
