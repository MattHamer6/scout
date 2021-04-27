<?php 
  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
  $name = get_field('name');
  $job = get_field('job_title');
  $location = get_field('region');
?>

<div class="member module in">
  <div class="member-wrapper">
    <a href="#single-member" title="<?php echo $name; ?>" data-toggle="modal" data-target="#member-<?php the_ID(); ?>">
      <img src="<?php echo $image[0]; ?>" alt="<?php echo $name; ?>" />
      <h3 class="in"><?php echo $name; ?></h3>
      <p><?php echo $job; ?></p>

      <?php if( $location ): ?>
        <span><?php echo $location; ?></span>
      <?php endif; ?>
      
    </a>
  </div>
</div>
