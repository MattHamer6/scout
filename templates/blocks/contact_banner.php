<section class="contact-banner" style="background:<?php the_sub_field('background_colour'); ?>;">
  <div class="container large-container">
    <div class="contact-banner-wrapper">
      <div class="content">
        <h2><?php the_sub_field('text'); ?></h2>
        
        <?php if( get_sub_field('description') ): ?>
          <p><?php the_sub_field('description') ?></p>
        <?php endif; ?>
      </div>
      <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="146" title="Contact Form"]'); ?>
      </div>
    </div>
  </div>
</section>