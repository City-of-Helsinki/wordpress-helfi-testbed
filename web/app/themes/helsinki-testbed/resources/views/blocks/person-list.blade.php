<div class="{{ esc_attr($block->classes) }}">
  <div class="grid">
    @foreach ($persons as $person)
      <div class="cell {{ $layout === 'vertical' ? 'cell--4 small:cell--2 medium:cell--3 ' : 'cell--6 medium:cell--4' }}">
        @includeFirst(['teasers.' . $person->post_type, 'teasers.teaser'], ['post' => $person, 'layout' => $layout])
      </div>
    @endforeach
    @php(wp_reset_postdata())
  </div>
</div>
