<?php wp_footer(); ?>
</main>

<?php // All footer content goes below this line ?>
<footer class="footer">
  <div class="container large-container">
    <div class="footer-wrapper">
      <?php // Footer Info ?>
      <div class="footer-info">
        <div class="logo">
          <img src="<?php the_field('company_logo', 'option'); ?>" alt="Scout Financial Planning" />
          <p><?php the_field('company_motto', 'option'); ?></p>
        </div>
        <div class="links">
          <b>Links</b>
          <?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false)); ?>
        </div>
        <?php /* No longer needed?
        <div class="newsletter">
          <b>Subscribe to our newsletter</b>
          <p>For all of the latest guides, news and updates, sent to your inbox.</p>
          <?php echo do_shortcode('[contact-form-7 id="76" title="Newsletter"]'); ?>
        </div>
        */ ?>
      </div>
      <?php // Disclaimer ?>
      <div class="footer-disclaimer">
        <?php the_field('disclaimer', 'option'); ?>
      </div>
      <?php // Copyright ?>
      <div class="footer-copyright">
        <p>&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo(); ?>. All Rights Reserved.</p>
      </div>
    </div>
  </div>
</footer>

<?php // End of footer ?>
</body>
</html>

