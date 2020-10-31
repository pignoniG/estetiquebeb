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
 * @package estetiquebeb
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="grid-container">
			<div class="grid-x">

		<?php
		while ( have_posts() ) :
			the_post();

			?>

			
			<div class="cell titoli">
				<?php the_title( '<h3 class="titolo corsivo">', '</h3>' ); ?>
			</div>
			
				<div class="entry-content">
					<?php
					the_content();
			
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'estetiquebeb' ),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->
			


			<?php

	

		endwhile; // End of the loop.
		?>
	</div>
	</div>
	</main><!-- #main -->

<?php

get_footer();
