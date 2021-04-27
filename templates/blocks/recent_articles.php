<section class="recent-articles">
  <div class="container large-container">
    <div class="recent-articles-wrapper">
      
      <?php // Content ?>
      <?php if( have_rows('content') ): ?>
        <div class="column-content">
          <?php while( have_rows('content') ): the_row(); ?>
            <div class="column-content-wrapper">
              <h3><?php the_sub_field('section_title'); ?></h3>
              <div><?php the_sub_field('section_content'); ?></div>

              <?php if( get_sub_field('add_overlay') == 'yes' ): ?>
                <div class="overlay"></div>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

      <?php // Related Articles ?>
      <?php if( have_rows('related_articles') ): ?>
        <div class="articles">
          <h3>Related articles</h3>
          <div class="articles-wrapper">

            <?php while( have_rows('related_articles') ): the_row(); 
              $post_object = get_sub_field('guide');
            ?>

              <?php if( $post_object ): 
                global $post;
                $post = $post_object;
                setup_postdata( $post );
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
              ?>

                <article>
                  <div class="image" style="background-image: url('<?php echo $image[0]; ?>');"></div>
                  <div class="content">
                    <b><?php the_title(); ?></b>
                    <p><?php the_field('short_excerpt', $post_object); ?></p>
                    <a href="<?php the_permalink(); ?>">Read more</a>
                  </div>
                </article>

                <?php wp_reset_postdata(); ?>
              <?php endif; ?>
              

            <?php endwhile; ?>

          </div>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>