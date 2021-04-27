<?php
  $count = 1;
  $title = get_sub_field('section_title');
?>

<section class="accordion">
  <div class="container large-container">
    <div class="accordion-wrapper">
      <h2><?php echo $title; ?></h2>

      <?php if( have_rows('accordion_headings') ): ?>
        <div class="accordion-headings" id="accordion">
          <?php while( have_rows('accordion_headings') ): the_row(); ?>

          <div class="card module in" data-filter-item data-filter-name="<?php the_sub_field('accordion_title'); ?>">
            <div class="card-header" id="heading-<?php echo $count; ?>" data-toggle="collapse" data-target="#content-<?php echo $count; ?>" aria-expanded="true"
                aria-controls="content-<?php echo $count; ?>">
              <h3>
                <?php the_sub_field('accordion_title'); ?>
              </h3>
              <i class="fas fa-chevron-down"></i>
            </div>

            <div id="content-<?php echo $count; ?>" class="card-content collapse"
              aria-labelledby="heading-<?php echo $count; ?>" data-parent="#accordion">
              <div class="card-body">
                <?php the_sub_field('accordion_content'); ?>
              </div>
            </div>
          </div>

          <?php $count ++; ?>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>