<section class="timeline module">
  <div class="container large-container">
    <div class="timeline-wrapper">
      <div class="text">
        <h3><?php the_sub_field('section_title'); ?></h3>
        <p><?php the_sub_field('section_text'); ?></p>
      </div>

      <?php if( have_rows('steps') ): ?>
        <?php $count = 1; ?>
        <div class="steps">
          <?php while( have_rows('steps') ): the_row(); 
            $img = get_sub_field('image');
            $text = get_sub_field('text');
            $bold = get_sub_field('statement');
          ?>

            <div class="step">
              <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
              <div class="connector">
                <div class="circle"></div>
              </div>
              <div class="content">
                <b><?php echo $count; ?></b>
                <p><?php echo $text; ?><span><?php echo $bold; ?></span></p>
              </div>
            </div>

            <?php $count++; ?>
          <?php endwhile; ?>
          <div class="line"></div>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>