<?php
	/**
	 * The template for displaying all pages
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages
	 * and that other 'pages' on your WordPress site may use a
	 * different template.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package DevWP
	 */

	get_header('special');
?>

	<div id="primary" class="content-area col-md-12">
		<main id="main" class="site-main theiaStickySidebar">
			<?php
				while ( have_posts() ): the_post();
					get_template_part( 'template-parts/content', 'page' );

					if ( comments_open() || get_comments_number() ):
						comments_template();
					endif;

				endwhile; // End of the loop.
			?>
		</main>
		<!-- #main -->
	</div> <!-- #primary -->

<?php
	get_footer();
