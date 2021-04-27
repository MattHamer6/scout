<?php 
  $title = get_sub_field('title');
  $sub = get_sub_field('subtitle');
?>

<section class="simple-hero">
  <div class="container large-container">
    <div class="simple-hero-wrapper">
      <h1><?php echo $title; ?></h1>
      <h2><?php echo $sub; ?></h2>
    </div>
  </div>
</section>