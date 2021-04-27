<section class="testimonial-blocks module">
  <div class="container large-container">
    <div class="testimonial-blocks-wrapper">
      <h2><?php the_sub_field('testimonial_title'); ?></h2>
      
      <?php if( have_rows('testimonials') ): ?>
        <div class="testimonials testimonials-desktop">
          <?php while( have_rows('testimonials') ): the_row(); 
            $post_object = get_sub_field('testimonial');
          ?>

            <div class="testimonial">
              <div class="testimonial-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/images/5-stars.svg" alt="5 star rating" />
                <p><?php echo get_field('testimonial', $post_object); ?></p>
                <b><?php echo get_field('name', $post_object); ?></b>
              </div>
            </div>

          <?php endwhile; ?>
        </div>
      <?php endif; ?>

      <?php // Mobile Slider ?>
      <?php if( have_rows('testimonials') ): ?>
        <div class="testimonials testimonials-mobile">
          <?php while( have_rows('testimonials') ): the_row(); 
            $post_object = get_sub_field('testimonial');
          ?>

            <div class="testimonial">
              <div class="testimonial-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/images/5-stars.svg" alt="5 star rating" />
                <p><?php echo get_field('testimonial', $post_object); ?></p>
                <b><?php echo get_field('name', $post_object); ?></b>
              </div>
            </div>

          <?php endwhile; ?>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>