<?php
	/**
	 * Template part for displaying the primary menu in the header section
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package DevWP
	 */

?>

<header id = "masthead" class = "site-header <?php echo devwp_has_header(); ?>">
	<nav id = "menu" class = "navbar navbar-expand-lg navbar-dark">

		<div class = "container">
			<div class = "site-branding navbar-brand">
				<?php
					the_custom_logo();
					if ( is_front_page() || is_home() ): ?>
						<h1 class = "site-title"><a	href = "<?php echo esc_url( home_url( '/' ) ); ?>" rel = "home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class = "site-title"><a href = "<?php echo esc_url( home_url( '/' ) ); ?>" rel = "home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					endif;
					
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ): ?>
						<p class = "site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif;
				?>
			</div><!-- .site-branding -->

			<button class = "navbar-toggler navbar-toggler-right" type = "button" data-toggle = "collapse"
		        data-target = "#bs4navbar" aria-controls = "bs4navbar" aria-expanded = "false"
		        aria-label = "Toggle navigation">
				<span class = "navbar-toggler-icon"></span>
			</button>
			
			<?php
				wp_nav_menu( [
					'menu'            => 'primary',
					'theme_location'  => 'primary',
					'depth'           => 2,
					'container'       => 'div',
					'container_id'    => 'bs4navbar',
					'container_class' => 'collapse navbar-collapse',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new bs4navwalker()
				] );
			?>
		</div><!-- .container -->
	</nav>

</header><!-- #masthead -->
