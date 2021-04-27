<?php 
  $col = get_sub_field('background_colour');
  $title = get_sub_field('section_title');
  $sub = get_sub_field('subtitle');
  $img = get_sub_field('image');
?>

<section class="hero-faq" style="background-color:<?php echo $col; ?>;">
  <div class="container large-container">
    <div class="hero-faq-wrapper">
      <div class="content">
        <h1><?php echo $title; ?></h1>
        <p><?php echo $sub; ?></p>
        <div>
          <input id="search-text" type="text" placeholder="Search for answers" />
          <button><i class="fas fa-search"></i></button>
        </div>
      </div>
      <div class="image">
        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
      </div>
    </div>
  </div>
</section>