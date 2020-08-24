<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5 fixed-top" <?php
        if (is_user_logged_in()): 
          echo"style='margin-top: 1.5rem;'";
        endif;
    ?> role="navigation">
  <div class="container">
     <a class="navbar-brand" href="<?php echo site_url(); ?>">Brand</a>
  <!-- Brand and toggle get grouped for better mobile display -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
    ☰
  </button>

<?php
wp_nav_menu( array(
  'theme_location'  => 'header',
  'depth'              => 2, // 1 = no dropdowns, 2 = with dropdowns.
  'container'       => 'div',
  'container_class' => 'collapse navbar-collapse',
  'container_id'    => 'bs-example-navbar-collapse-1',
  'menu_class'      => 'navbar-nav mr-auto',
  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
  'walker'          => new WP_Bootstrap_Navwalker(),
) ); ?>
</div>
</nav>