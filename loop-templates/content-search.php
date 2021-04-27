<?php 
	$guideId = get_sub_field('guide');
	$excerpt = get_field('short_excerpt');
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="article-wrapper">
		<div class="image" style="background-image:url('<?php echo $image[0]; ?>');"></div>
		<div class="content">
			<h3><?php the_title(); ?></h3>
			<p><?php echo $excerpt; ?></p>
			<a href="<?php the_permalink(); ?>">Read more</a>
		</div>
	</div>
</article>