<article @php(post_class())>
  <header class="entry-header">
    <h2 class="entry-title">
      <a href="{{ get_permalink() }}">
        @php(the_title())
      </a>
    </h2>

    @includeWhen(get_post_type() === 'post', 'partials/entry-meta')
  </header>

  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
