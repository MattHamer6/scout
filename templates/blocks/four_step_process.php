<section class="four-step-process module">
  <div class="container large-container">
    <div class="four-step-process-wrapper">
      <h2><?php the_sub_field('section_title'); ?></h2>

      <?php if( have_rows('steps') ): ?>
        <?php $count = 1; ?>
        <div class="steps">

          <?php while( have_rows('steps') ): the_row(); ?>
            <div class="step">
              <div class="count">
                <div class="seperator">
                  <div class="line"></div>
                  <div class="circle"></div>
                </div>

                <b><?php echo $count; ?></b>

                <div class="seperator">
                  <div class="circle"></div>
                  <div class="line"></div>
                </div>
              </div>
              <div class="text">
                <p><?php the_sub_field('text'); ?></p>
              </div>
            </div>
            <?php $count++; ?>
          <?php endwhile; ?>

        </div>
      <?php endif; ?>

    </div>
  </div>
</section>