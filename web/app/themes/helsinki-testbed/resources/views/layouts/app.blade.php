<div class="site">
  <div class="site-header">
    @php(do_action('get_header'))
    @include('partials.header')
  </div>

  <main class="site-content">
    @yield('content')
  </main>

  <footer class="site-footer">
    @include('partials.footer')
  </footer>
</div>
