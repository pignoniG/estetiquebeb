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

			<div class="cell">

			<?php echo do_shortcode('[newsletter]'); ?>
			
			</div>
		</div>
	</div>
	</main><!-- #main -->

<?php

get_footer();