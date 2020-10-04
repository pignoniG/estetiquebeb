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

				<div class="cell titoli">

					
					<h3 class="titolo corsivo">offerte speciali e news</h3>

					<h2 class="sottotitolo maiuscolo"><?php echo do_shortcode('[newsletter]'); ?></h2>


				</div>


			
			
			</div>
		</div>
	</div>
	</main><!-- #main -->

<?php

get_footer();
