<div class="wp-block-hds-icon-text {{ esc_attr($block->classes) }}">
    <div class="wp-block-hds-icon-text__icon has-{!! $iconName !!}-icon has-{!! $iconColor !!}-color">
    </div>
    <div class="wp-block-hds-icon-text__heading has-{!! $textColor !!}-color">
        {!! wp_kses_post($heading) !!}
    </div>
    <div class="wp-block-hds-icon-text__body has-{!! $textColor !!}-color">
        {!! wp_kses_post($body) !!}
    </div>
</div>
