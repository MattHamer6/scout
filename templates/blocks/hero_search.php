<?php 
  $col = get_sub_field('background_colour');
  $title = get_sub_field('title');
  $sub = get_sub_field('subtitle');
  $img = get_sub_field('image');
?>

<section class="hero-search" style="background-color:<?php echo $col; ?>;">
  <div class="container large-container">
    <div class="hero-search-wrapper">
      <div class="content">
        <h1><?php echo $title; ?></h1>
        <p><?php echo $sub; ?></p>
        <?php echo get_search_form(); ?>
      </div>
      <div class="image">
        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
      </div>
    </div>
  </div>
</section>