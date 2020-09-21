<footer class="content-info has-ui-03-background-color has-background">
  <div class="footer">
    <div class="footer__above">
      <div class="footer__logo">
        @svg('images/logo/helsinki-fi.svg', '', ['width' => 67, 'height' => 31])
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
