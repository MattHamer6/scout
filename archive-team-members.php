<?php get_header(); ?>

<?php
  $title = get_field('team_title', 'option');
  $desc = get_field('team_description', 'option');
  $search = get_field('team_search_description', 'option');
  $formTitle = get_field('team_form_title', 'option');
  $formDesc = get_field('team_form_description', 'option');
?>

<?php // Team Member Hero ?>
<section class="team-hero">
  <div class="container large-container">
    <div class="team-hero-wrapper">
      <div class="content">
        <h1><?php echo $title; ?></h1>
        <p><?php echo $desc; ?></p>
      </div>
    </div>
  </div>
</section>

<?php // Team Member Search ?>
<section class="team-search">
  <div class="container large-container">
    <div class="team-search-wrapper">
      <h2>Agent search</h2>
      <div class="search-form">
        <p><?php echo $search; ?></p>
        <div>
          <input id="search-text" type="text" placeholder="Agent Name e.g. Jane Smith" />
          <button><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div>
  </div>
</section>

<?php // Individual Team Member ?>
<section class="single-members" id="single-member">
  <div class="container large-container">
    <div class="single-members-wrapper">

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'loop-templates/content-team-single', get_post_format() ); ?>
        <?php endwhile; ?>
      <?php endif; ?>
      
    </div>
  </div>
</section>

<?php // Team Members Loop ?>
<section class="team-members">
  <div class="container large-container">
    <div class="team-members-wrapper">

      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'loop-templates/content-team', get_post_format() ); ?>

        <?php endwhile; ?>
        <?php else : ?>
          <?php get_template_part( 'loop-templates/content', 'none' ); ?>
      <?php endif; ?>

      <?php understrap_pagination(); ?>

    </div>
  </div>
</section>

<?php // Contact Form ?>
<section class="team-form">
  <div class="container large-container">
    <div class="team-form-wrapper">
      <div class="content">
        <h2><?php echo $formTitle; ?></h2>
        <p><?php echo $formDesc; ?></p>
      </div>
      <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="146" title="Contact Form"]'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>