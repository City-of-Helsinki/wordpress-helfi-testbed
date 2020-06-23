<header class="header">
  <div class="site-header">
    <a class="site-header__logo" href="{{ home_url('/') }}" rel="home" aria-label="{{ __('Go to frontpage', 'helsinki-testbed') }}">
      @svg('images/logo/helsinki-fi.svg', '', ['width' => 102, 'height' => 47])
    </a>

    <div class="site-header__name">
      <h5>{{ $site_name }}</h5>
    </div>

    <div class="site-header__search">
    </div>

    <div class="site-header__languages">
    </div>
  </div>

  <nav class="site-navbar">
    @include('partials.navigation')
  </nav>
</header>
