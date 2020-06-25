<article @php(post_class())>
  @if ($printPageHeading)
    <header class="entry-header">
      <h1 class="entry-title">
        @php(the_title())
      </h1>
    </header>
  @endif

  <div class="entry-content">
    @php(the_content())
  </div>
</article>
