<?php 
  $title = get_sub_field('title');
  $text = get_sub_field('text');
  $img = get_sub_field('image');
?>

<section class="homepage-hero">
  <div class="container large-container">
    <div class="homepage-hero-wrapper">
      <?php // Content ?>
      <div class="content">
        <h1><?php echo $title; ?></h1>
        <p><?php echo $text; ?></p>

        <?php if( have_rows('add_buttons') ): ?>
          <ul>
            <?php while( have_rows('add_buttons') ): the_row(); 
              $btnName = get_sub_field('button_text');
              $btnLink = get_sub_field('button_link');
            ?>
              <li><a href="<?php echo $btnLink; ?>"><?php echo $btnName; ?></a></li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
        
      </div>
      <?php // Image ?>
      <div class="image">
        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
      </div>
    </div>
  </div>
</section>