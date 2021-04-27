<?php 
  $col = get_sub_field('background_colour');
  $title = get_sub_field('title');
  $img = get_sub_field('image');
?>

<section class="hero-contact" style="background-color:<?php echo $col; ?>;">
  <div class="container large-container">
    <div class="hero-contact-wrapper">
      <div class="content">
        <h1><?php echo $title; ?></h1>
      </div>
      <div class="image">
        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
      </div>
    </div>
  </div>
</section>