<?php
	/**
	 * The header for our theme
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package DevWP
	 */
	
	// $containerType = get_theme_mod( 'devwp_container_type' );
	// $navbarType    = get_theme_mod( 'devwp_navbar_type' );
	$containerType = 'container';
	$navbarType = '';
?>
	<!doctype html>
<html <?php language_attributes(); ?>>
	
	<head>
		<meta charset = "<?php bloginfo( 'charset' ); ?>">
		<meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name = "mobile-web-app-capable" content = "yes">
		<meta name = "apple-mobile-web-app-capable" content = "yes">
		<meta name = "apple-mobile-web-app-title" content = "<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
		<link rel = "profile" href = "http://gmpg.org/xfn/11">
		
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

	<div id = "page" class = "site">
	<a class = "skip-link screen-reader-text" href = "#content">
		<?php esc_html_e( 'Skip to content', 'devwp' ); ?>
	</a>

	<?php get_template_part( 'template-parts/header', 'navbar' ); ?>
	<!-- ### End of navbar ### -->

	<?php if ( is_front_page() && ! is_home() ) :
		// https://developer.wordpress.org/reference/functions/has_custom_header/
		// https://developer.wordpress.org/reference/functions/has_header_video/
		if ( has_header_video() ) : ?>
			<?php // https://youtu.be/pEJ2IzYOx5c
			//  https://youtu.be/fxIlVbvOHyY
			if ( 'fixed-top' == $navbarType || 'offcanvas' == $navbarType ) : ?>
				<div class = "mt-6">
			<?php endif;
			// https://developer.wordpress.org/reference/functions/the_custom_header_markup/
			the_custom_header_markup();
			
			if ( 'fixed-top' == $navbarType || 'offcanvas' == $navbarType ) : ?>
				</div>
			<?php endif;

		// https://developer.wordpress.org/reference/functions/has_header_image/
		elseif ( has_header_image() ) : ?>
			
			<div class = "header-image d-flex justify-content-center align-items-center <?php
				if ( 'fixed-top' == $navbarType || 'offcanvas' == $navbarType ) {
					echo 'mt-6';
				} ?>">
				<?php devwp_header_text(); ?>
				<img src = "<?php header_image(); ?>" width = "<?php echo esc_attr( get_custom_header() -> width ); ?>"
				     alt = "<?php bloginfo( 'name' ); ?>">
			</div>
		
		<?php endif;

		$ffesb = is_active_sidebar( 'front-full-edge' );
		$ffcsb = is_active_sidebar( 'front-full-centered' );
		if ( $ffesb ) : ?>
			<div
				class = "d-flex justify-content-center <?php if ( 'fixed-top' == $navbarType && ! has_custom_header() ) {
					echo 'mt-6';
				} else {echo 'mt-1';} ?>">
				<?php dynamic_sidebar( 'front-full-edge' ); ?>
			</div>
		
		<?php endif; ?>

		
		<div class = "fp <?php echo esc_attr( $containerType );
			if ( 'fixed-top' == $navbarType && ! has_custom_header() ) {
				echo ' mt-7';
			} else {
				echo ' mt-2';
			} ?>">
	<?php endif;

	if ( is_home() ) :
		if ( is_active_sidebar( 'home-full-edge' ) ) : ?>
			<div
				class = "header-image d-flex justify-content-center align-items-center <?php if ( 'fixed-top' == $navbarType || 'offcanvas' == $navbarType ) {
					echo 'mt-6';
				} ?>">
				<?php devwp_header_blog();
					dynamic_sidebar( 'home-full-edge' ); ?>
			</div>
		
			<div class = "hp1 <?php echo esc_attr( $containerType ); ?>">
		
		<?php else : ?>
		
			<div class = "hp2 <?php echo esc_attr( $containerType );
				if ( 'fixed-top' == $navbarType ) {
					echo ' mt-7';
				} ?>">

		<?php endif;
	endif;
	
	if ( ! is_front_page() && ! is_home() ) : ?>
		<div class = "<?php echo esc_attr( $containerType ); ?> ">
		<div id = "content" class = "site-content row <?php if ( 'fixed-top' == $navbarType || 'offcanvas' == $navbarType ) { echo ' mt-7';	} else { echo 'mt-3'; } ?> HEADER_END">
	<?php endif;
