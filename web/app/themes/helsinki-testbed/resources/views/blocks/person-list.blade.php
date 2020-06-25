<div class="{{ esc_attr($block->classes) }}">
  <div class="grid">
    @foreach ($persons as $person)
      <div class="cell {{ $layout === 'vertical' ? 'cell--3' : 'cell--6' }}">
        @includeFirst(['teasers.' . $person->post_type, 'teasers.teaser'], ['post' => $person, 'layout' => $layout])
      </div>
    @endforeach
    @php(wp_reset_postdata())
  </div>
</div>
