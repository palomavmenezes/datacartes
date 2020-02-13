<?php wp_footer(); ?>
<footer>
    <section class="footer">
        <!-- Início do Menu -->
    <div class="container menu-footer">

      <nav class="navbar navbar-expand-md justify-content-center footer">
        <div id="footer" class="row copyright-menu">
             <div class="footer-menu">
                <ul>
                    <li class="copyright">© 2019 TODOS OS DIREITOS RESERVADOS | DATA CARTÊS</li>
                    <li><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></li>
                </ul>
            </div>
        </div>
      </nav>
      <!-- .main-nav -->
    </div>
    </section>
</footer>

</html>
