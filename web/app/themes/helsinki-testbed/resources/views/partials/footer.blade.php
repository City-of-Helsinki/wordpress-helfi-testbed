<footer class="content-info has-ui-03-background-color has-background">
  <div class="footer">
    <div class="footer__above">
      <div class="footer__logo">
        @if (mb_substr(get_locale(), 0, 2) === 'sv')
          @svg('images/logo/helsinki-sv.svg', '', ['width' => 67, 'height' => 31])
        @else
          @svg('images/logo/helsinki-fi.svg', '', ['width' => 67, 'height' => 31])
        @endif
      </div>
      <div class="footer__menu">
        @php(dynamic_sidebar('footer-menu'))
      </div>
    </div>
    <hr/>
    <div class="footer__below">
      <div class="footer__disclaimers">
        @php(dynamic_sidebar('footer-disclaimers'))
      </div>
      <div class="footer__social">
        @php(dynamic_sidebar('footer-social'))
      </div>
      <div class="footer__contact">
        @php(dynamic_sidebar('footer-contact'))
      </div>
    </div>
  </div>
</footer>
