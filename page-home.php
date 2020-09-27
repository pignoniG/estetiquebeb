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


				<!-- ############################################ SLIDER ############################################# -->
				<?php

				if( have_rows('carosello_copertina') ):
				$count = count(get_field('carosello_copertina')); // echo $count;
				?>
				<div class="home_slider" >

					<div class="main-carousel">

					<?php
					$i=1; $proj_i=1;
				    while ( have_rows('carosello_copertina') ) : the_row(); ?>

				    <?php				        
				        // print_r(get_sub_field('project'));
				    	$content_image = get_sub_field('immagine_carosello'); //print_r($content_image);
		
				    	if($content_image){		

				    		$content_image_url = esc_url($content_image['url']);
				    	
				
				    	}
				    	$overlay__image_url = get_template_directory_uri() . '/inc/filigrana_hero.svg';
				    	$content_image_caption = get_sub_field('copy_carosello');
				    	$content_image_button_caption = get_sub_field('copy_bottone');
				    	$content_image_button_link = get_sub_field('link_bottone')['url'];
				    	
				    	
					?>

					 <div class="carousel-cell">
					 	<div class="carousel-image" style="background-image: url('<?php echo($content_image_url); ?>');"></div>
					 	 <div class="carousel-overlay " style="background-image: url('<?php echo($overlay__image_url); ?>');" >
					 	 	<h4 class="titolo corsivo"><?php echo $content_image_caption; ?></h4>

					 	 		<a href="<?php echo($content_image_button_link); ?>" class="button"><?php echo($content_image_button_caption); ?></a>
					 	 </div>
					 	 
					 	
					 </div>

					

						
					<?php endwhile; ?>

					</div>

		
				</div> <!-- close .main-carousel -->

				<?php endif; ?>


		<div class="grid-container">
			<div class="grid-x">




			</div>
		</div>

	</main><!-- #main -->

<?php

get_footer();
