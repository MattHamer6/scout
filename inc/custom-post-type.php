<?php 

// Team Members
add_action( 'init', 'TeamMembers' );
function TeamMembers() {
  register_post_type( 'team-members',
    array(
      'labels' => array(
        'name' => __( 'Team Members' ),
        'singular_name' => __( 'Team Member' )
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true, // Do you want to enable Gutenberg?
			'supports' => array( 'title', 'thumbnail' ),
			'taxonomies' => array( 'category' ), // Enable categories with CPT
      'menu_icon' => 'dashicons-groups'
    )
  );
}

// Testimonials
add_action( 'init', 'Testimonials' );
function Testimonials() {
  register_post_type( 'testimonials',
    array(
      'labels' => array(
        'name' => __( 'Testimonials' ),
        'singular_name' => __( 'Testimonial' )
      ),
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => false, // Do you want to enable Gutenberg?
			'supports' => array( 'title' ),
			'taxonomies' => array( 'category' ), // Enable categories with CPT
      'menu_icon' => 'dashicons-smiley'
    )
  );
}

// Guides
add_action( 'init', 'Guides' );
function Guides() {
  register_post_type( 'guides',
    array(
      'labels' => array(
        'name' => __( 'Guides' ),
        'singular_name' => __( 'Guide' )
      ),
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => false, // Do you want to enable Gutenberg?
			'supports' => array( 'title', 'thumbnail' ),
			'taxonomies' => array( 'category' ), // Enable categories with CPT
      'menu_icon' => 'dashicons-book'
    )
  );
}