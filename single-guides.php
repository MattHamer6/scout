<?php get_header(); ?>

<?php 
  $title = get_field('hero_title');
  $sub = get_field('hero_subtitle');
  $contact = get_field('contact_text');
  $contactBg = get_field('contact_background');
?>

<?php // Hero ?>
<section class="simple-hero">
  <div class="container large-container">
    <div class="simple-hero-wrapper">
      <h1><?php echo $title; ?></h1>
      <h2><?php echo $sub; ?></h2>
    </div>
  </div>
</section>

<?php // Page Builder ?>

<?php if( have_rows('flexible_content') ): ?>
    <?php while( have_rows('flexible_content') ): the_row();
      
      $layout_name = get_row_layout();
      get_template_part( "templates/blocks/$layout_name" );

    endwhile; ?>
<?php endif; ?>


<?php // Contact Form ?>
<section class="contact-banner" style="background:<?php echo $contactBg; ?>;">
  <div class="container large-container">
    <div class="contact-banner-wrapper">
      <div class="content">
        <h2><?php echo $contact; ?></h2>
      </div>
      <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="146" title="Contact Form"]'); ?>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>