<?php 
  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
  $name = get_field('name');
  $job = get_field('job_title');
  $location = get_field('region');
  $conent = get_field('content');
?>

<div class="modal fade single-member" id="member-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="single-member-wrapper">
          <div class="bio">
            <img src="<?php echo $image[0]; ?>" alt="<?php echo $name; ?>" />
            <h3><?php echo $name; ?></h3>
            <p><?php echo $job; ?></p>

            <?php if( $location ): ?>
              <span><?php echo $location; ?></span>
            <?php endif; ?>
            
          </div>
          <div class="content">
            <?php echo $conent; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>