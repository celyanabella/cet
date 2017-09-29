<?php
/**
 * The template for displaying the footer
 */
?>
      </div>

    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6">

            <strong>el independiente</strong> &copy;2017 - Todos los derechos reservados. <a href="#">OCEAN SUR</a>

          </div>
          <div class="col-sm-6 text-xs-right">

            <?php
              wp_nav_menu( array(
                'theme_location' => 'footer',
                'container' => 'div',
                'menu_class' => 'list-inline'
              ) );
            ?>

          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/general.js" type="text/javascript"></script>

    <?php wp_footer(); ?>
  </body>
</html>