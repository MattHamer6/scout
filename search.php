<?php get_header(); ?>

<section class="search-results-hero">
  <div class="container large-container">
    <div class="search-results-hero-wrapper">
      <h1>you searched for:</h1>
      <h2>"<?php echo get_search_query(); ?>"</h2>
    </div>
  </div>
</section>


<section class="search-results">
	<div class="container large-container">
		<div class="search-results-wrapper">

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop-templates/content', 'search' ); ?>
				<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part( 'loop-templates/content', 'none' ); ?>
			<?php endif; ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>