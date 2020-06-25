<div class="{{ esc_attr($block->classes) }}">
  <div class="grid">
    @foreach ($persons as $person)
      <div class="cell {{ $layout === 'vertical' ? 'xsmall:4 small:2 medium:4 large:3' : 'medium:4 large:6' }}">
        @includeFirst(['teasers.' . $person->post_type, 'teasers.teaser'], ['post' => $person, 'layout' => $layout])
      </div>
    @endforeach
    @php(wp_reset_postdata())
  </div>
</div>
