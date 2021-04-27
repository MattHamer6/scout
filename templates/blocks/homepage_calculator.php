<?php
  $title = get_sub_field('section_title');
  $subtitle = get_sub_field('subtitle');
  $text = get_sub_field('text');
?>

<section class="homepage-calculator module">
  <div class="container large-container">
    <div class="homepage-calculator-wrapper">
      <div class="content">
        <h2><?php echo $title; ?></h2>
        <h3><?php echo $subtitle; ?></h3>
        <p><?php echo $text; ?></p>
      </div>
      <div class="calculator">
        <?php include get_theme_file_path( '/templates/includes/calculators/mortgage-calculator.php' ); ?>
      </div>
    </div>
  </div>
</section>