<nav class="desktop-nav navbar navbar-expand-lg navbar-light" role="navigation">
  <div class="container large-container">
    <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
      <img src="<?php the_field('company_logo', 'option'); ?>" alt="<?php echo get_bloginfo(); ?> Logo" />
    </a>
    <!-- Brand and toggle get grouped for better mobile display -->
    <button id="navbar-toggle" class="navbar-toggler hamburger hamburger--squeeze" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <?php
    wp_nav_menu( array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
    ) );
    ?>
  </div>
</nav>