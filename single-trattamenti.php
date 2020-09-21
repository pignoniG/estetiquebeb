<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package estetiquebeb
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="grid-container">
			<div class="grid-x">

				<div class="cell immagine_copertina">
					<?php 
						$immagine_copertina = get_field('immagine_copertina');
						if( !empty( $immagine_copertina ) ): ?>

					    	<img class="immagine_copertina" src="<?php echo esc_url($immagine_copertina['url']); ?>" alt="<?php echo esc_attr($immagine_copertina['alt']); ?>" />

					<?php endif; ?>
				</div>

				<div class="cell titoli">
					<h3 class="titolo corsivo"> Trattamenti</h3>
					<h2 class="sottotitolo maiuscolo"> <?php 
					$category_detail=get_the_category();

					foreach($category_detail as $cd){
						echo $cd->cat_name;
					}
					echo " ";
					echo get_the_title(); ?></h2>


					 

				</div>



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




	</main><!-- #main -->

<?php

get_footer();
