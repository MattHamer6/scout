<div class="related-guides">
  <div class="related-guides-wrapper">
    <h3>Related Articles</h3>
    
    <?php if( have_rows('related_articles') ): ?>
      <div class="guides">
        <?php while( have_rows('related_articles') ): the_row(); ?>

          <?php 
            $articleId = get_sub_field('article');
            $excerpt = get_field('short_excerpt', $guideId);
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

            if( $articleId ) :
            $post = $articleId;
            setup_postdata($post);
          ?>

            <article>
              <div class="image" style="background-image: url('<?php echo $image[0]; ?>')"></div>
              <h4><?php the_title(); ?></h4>
              <p><?php echo $excerpt; ?></p>
              <a href="<?php the_permalink(); ?>">Read more</a>
            </article>


            <?php wp_reset_postdata(); ?>
          <?php endif; ?>

        <?php endwhile; ?>
      </div>
    <?php endif; ?>

  </div>
</div>