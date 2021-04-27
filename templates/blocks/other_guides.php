<section class="other-guides module">
  <div class="container large-container">
    <div class="other-guides-wrapper">
      <div class="content">
        <h2><?php the_sub_field('section_title'); ?></h2>
        <p><?php the_sub_field('section_text'); ?></p>
      </div>

      <?php if( have_rows('guides') ): ?>
        <div class="guides">
          <?php while( have_rows('guides') ): the_row(); ?>
            <div class="guide">

              <?php 
                $guideId = get_sub_field('guide');
                $excerpt = get_field('short_excerpt', $guideId);

                if( $guideId ) :
                $post = $guideId;
                setup_postdata($post);
              ?>

                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <div class="guide-wrapper">
                  <div class="image" style="background-image:url('<?php echo $image[0]; ?>');"></div>
                  <div class="guide-content">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo $excerpt; ?></p>
                    <a href="<?php the_permalink(); ?>">Read more</a>
                  </div>
                </div>

                <?php wp_reset_postdata(); ?>
              <?php endif; ?>

            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>