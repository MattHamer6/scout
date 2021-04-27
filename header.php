<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>


<?php // All header content goes below this line ?>
<header class="header">
	<?php include get_theme_file_path( '/templates/includes/nav.php' ); ?>
</header>

<?php include get_theme_file_path( '/templates/includes/mobile-nav.php' ); ?>

<main>