<section class="calculator">
  <div class="container large-container">
    <div class="calculator-wrapper">
      <h2><?php the_sub_field('section_title'); ?></h2>
      <p><?php the_sub_field('section_intro'); ?></p>

      <div>
        <?php if( get_sub_field('calculator') == 'mortgage' ): ?>
          <?php include get_theme_file_path( '/templates/includes/calculators/mortgage-calculator.php' ); ?>
        <?php endif; ?>

        <?php if( get_sub_field('calculator') == 'moving' ): ?>
          <?php include get_theme_file_path( '/templates/includes/calculators/cost-of-borrowing.php' ); ?>
        <?php endif; ?>

        <?php if( get_sub_field('calculator') == 'stamp' ): ?>
          <?php include get_theme_file_path( '/templates/includes/calculators/stamp-duty.php' ); ?>
        <?php endif; ?>
      </div>

      <p class="notice"><?php the_sub_field('notice'); ?></p>
    </div>
  </div>
</section>