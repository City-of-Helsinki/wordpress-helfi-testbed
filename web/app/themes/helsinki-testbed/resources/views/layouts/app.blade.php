<div class="site">
  <div class="site__header">
    @php(do_action('get_header'))
    @include('partials.header')
  </div>

  <main class="site__content">
    @yield('content')
  </main>

  <footer class="site__footer">
    @include('partials.footer')
  </footer>
</div>
