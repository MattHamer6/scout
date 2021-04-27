<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
  <input class="field form-control search" id="s" name="s" type="text"
			placeholder="Search for answers" value="<?php the_search_query(); ?>">
  <input type="hidden" name="post_type" value="guides" />
  <button type="submit"><i class="fas fa-search"></i></button>
</form>