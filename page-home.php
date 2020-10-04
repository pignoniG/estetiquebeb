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


		<div class="grid-x sovra_contenitore_corpo left form-container">
	<div class="cell small-12 medium-6 large-6 contenitore_corpo left form ">
		 
		<?php echo do_shortcode('[contact-form-7 id="252" title="Seduta Gratuita"]'); ?>	

	</div>
	
	<div class="cell small-12 medium-6 large-6 contenitore_corpo left ">
	
		<h4 class="titolo corsivo">Epilazione laser</h4>
				<h5 class="sottotitolo maiuscolo">PRIMA SEDUTA GRATUITA*</h5>
				<p>Compila il form e sarai contattato telefonicamente dal nostro staff, insieme sceglieremo la data della tua seduta gratuita.
*Solo nuovi clienti epilazione. (viso, inguine, ascelle, petto, addome)</p>
	
	</div>
</div>



	

	
	</div>
		<div class="grid-container">

				<?php
				// Check rows exists.
				if( have_rows('post_body') ):

					$contatore_corpo=0;
				
				    // Loop through rows.
				    while( have_rows('post_body') ) : the_row();

				    	$titolo_blocco = get_sub_field('titolo_blocco');
				    	$sottotitolo_blocco = get_sub_field('sottotitolo_blocco');
				    	$selettore_tabella = get_sub_field('selettore_tabella');

						if( get_sub_field('selettore_tabella') == 'Immagine e testo' ) {

							$immagine_blocco = get_sub_field('immagine_blocco');
							$testo_blocco = get_sub_field('testo_blocco');
						    
						    if(($contatore_corpo % 2) == 0){ 
						    	
						    	include(locate_template('template-parts/body_left.php'));
						    }
						    else{
						    	include(locate_template('template-parts/body_right.php'));
						    }

						    $contatore_corpo++;  

						}
						if( get_sub_field('selettore_tabella') == 'Tabella' ) { 
							$tabella_blocco = get_sub_field('tabella_blocco');

						   include(locate_template('template-parts/body_tabella.php'));
						}

				        // Do something...
				
				    // End loop.
				    endwhile;
				
				// No value.
				else :
				    // Do something...
				endif;

				?>

	</div>



		<div class="grid-container">
			<div class="grid-x trattamenti_piu_richiesti-container">
			<div class="cell trattamenti_piu_richiesti-text">
				<h4 class="titolo corsivo">Cura il corpo e rilassati al meglio</h4>	
				<h5 class="sottotitolo maiuscolo" >TRATTAMENTI PIU RICHIESTI</h5>	
			</div>
				





				<?php
				// Check rows exists.
				if( have_rows('trattamenti_piu_richiesti') ):
					$contatore_trattamenti_piu_richiesti = 0;

				
				
				    // Loop through rows.
				    while( have_rows('trattamenti_piu_richiesti') ) : the_row();
				    	


				    	$nome_trattamento = get_sub_field('nome_trattamento');
				    	$link_trattamento = get_sub_field('link_trattamento')['url'];
				    	$immagine_trattamento = esc_url(get_sub_field('immagine_trattamento')['url']);

				    	?>

				    		<div class="cell small-12 medium-4 large-4 contenitore_trattamenti_piu_richiesti <?php echo "n-".$contatore_trattamenti_piu_richiesti; ?>" >
				    			<a href='<?php $link_trattamento; ?>'>

				    			<div class="immagine_trattamento" style="background-image: url('<?php echo($immagine_trattamento); ?>');" ></div> 
				    		

								<h5 class="sottotitolo maiuscolo" > <?php echo $sottotitolo_blocco; ?> </h5>
								</a>	



				    			
				    		</div> 
				    	<?php
				    	$contatore_trattamenti_piu_richiesti++;




				        // Do something...
				
				    // End loop.
				    endwhile;
				
				// No value.
				else :
				    // Do something...
				endif;

				?>



	</div>		
	</div>


		<div class="grid-container">

				<?php
				// Check rows exists.
				if( have_rows('post_body_social') ):

		
				
				    // Loop through rows.
				    while( have_rows('post_body_social') ) : the_row();

				    	$titolo_blocco = get_sub_field('titolo_blocco');
				    	$sottotitolo_blocco = get_sub_field('sottotitolo_blocco');
				    	

						

						$immagine_blocco = get_sub_field('immagine_blocco');
						$testo_blocco = get_sub_field('testo_blocco');
						
						if(($contatore_corpo % 2) == 0){ 
							
							include(locate_template('template-parts/body_left.php'));
						}
						else{
							include(locate_template('template-parts/body_right.php'));
						}

						$contatore_corpo++;  

						
						

				        // Do something...
				
				    // End loop.
				    endwhile;
				
				// No value.
				else :
				    // Do something...
				endif;

				?>

	</div>


	</main><!-- #main -->

<?php

get_footer();
