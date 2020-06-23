<li class="
  {{ $name }}__item
  {{ $item->classes ?? '' }}
  {{ ($item->active || $item->activeAncestor) ? 'is-active': '' }}
  {{ $item->children ? 'has-children' : '' }}
">
  <a
    href="{{ $item->url }}"
    target="{{ $item->target ?? '' }}"
    title="{{ $item->title ?? '' }}"
    class="{{ $name }}__link {{ ($item->active || $item->activeAncestor) ? 'is-active': '' }}"
    role="menuitem"
  >
    {!! esc_html($item->label) !!}
  </a>

  @if ($item->children)
    <button
      class="{{ $name }}__submenu-trigger has-angle-down-icon"
      aria-haspopup="true"
      aria-expanded="false"
      aria-label="{{ __('Open submenu', 'helsinki-testbed') }}"
      tabindex="0"
    ></button>

    <ul class="{{ $name }}__submenu {{ $item->active ? 'is-active' : '' }}" aria-label="{!! esc_attr($item->label) !!}">
      @foreach ($item->children as $child)
        @include('partials.menu-item', ['item' => $child, 'name' => $name])
      @endforeach
    </ul>
  @endif
</li>
