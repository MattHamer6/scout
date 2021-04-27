<?php

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',											// WooCommerce 
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/acf-options.php',											// ACF Option Pages
	'/blocks.php',													// ACF Gutenberg Blocks
	'/custom-post-type.php',								// Custom post types
	'/customise-woocommerce.php',						// Customisation of WooCommerce
	'/disable-editor.php',									// Disable Page Editor
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}


// Set posts per page to unlimited for team members
function set_posts_per_page_for_towns_cpt( $query ) {
  if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'team-members' ) ) {
    $query->set( 'posts_per_page', '-1' );
  }
}
add_action( 'pre_get_posts', 'set_posts_per_page_for_towns_cpt' );

// Search functionality
