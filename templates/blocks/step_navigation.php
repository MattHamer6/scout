<section class="step-navigation module">
  <div class="container large-container">
    <div class="step-navigation-wrapper">

      <?php // Sidebar ?>
      <?php if( have_rows('steps') ): ?>
        <?php $num = 1; ?>
        <div class="sidebar">
          <?php while( have_rows('steps') ): the_row(); ?>
            
            <div class="step">
              <b>Step <?php echo $num; ?>:</b>
              <p><?php the_sub_field('title'); ?></p>
            </div>

            <?php $num++; ?>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

      <?php // Main Content ?>
      <?php if( have_rows('steps') ): ?>
        <?php $count = 1; ?>

        <div class="pagination">
          <p class="prev"><i class="fas fa-chevron-left"></i> Previous</p>
          <p class="next">Next <i class="fas fa-chevron-right"></i></p>
        </div>
        <div class="content">
          <?php while( have_rows('steps') ): the_row(); ?>

            <div class="content-wrapper">
              <span>Step <?php echo $count; ?>:</span>
              <h3><?php the_sub_field('title'); ?></h3>
              <div><?php the_sub_field('content'); ?></div>
            </div>

            <?php $count++; ?>
          <?php endwhile; ?>
        </div>
        <div class="pagination">
          <p class="prev"><i class="fas fa-chevron-left"></i> Previous</p>
          <p class="next">Next <i class="fas fa-chevron-right"></i></p>
        </div>
      <?php endif; ?>


    </div>
  </div>
</section>