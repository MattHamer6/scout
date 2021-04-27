<section class="mortgage-type-buttons module">
  <div class="container large-container">

    <?php if( have_rows('mortgage_types') ): ?>
      <div class="mortgage-type-buttons-wrapper">
        <h3>Ready to <br />get started?</h3>
        <div class="boxes">
          <?php while( have_rows('mortgage_types') ): the_row(); 
            $img = get_sub_field('image');
            $title = get_sub_field('title');
            $link = get_sub_field('link');
          ?>

            <a class="mortgage-type" href="<?php echo $link; ?>" name="<?php echo $title; ?>">
              <div class="mortgage-type-wrapper">
                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
                <p><?php echo $title; ?></p>
              </div>
            </a>

          <?php endwhile; ?>
        </div>
      </div>
    <?php endif; ?>

  </div>
</section>