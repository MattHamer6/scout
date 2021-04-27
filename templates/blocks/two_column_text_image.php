<?php 
  $title = get_sub_field('section_title');
  $content = get_sub_field('content');
  $img = get_sub_field('image');
?>

<section class="two-column-text-image module">
  <div class="container large-container">
    <div class="two-column-text-image-wrapper">
      <h2><?php echo $title; ?></h2>
      <div class="content">
        <?php echo $content; ?>
      </div>
      <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
    </div>
  </div>
</section>