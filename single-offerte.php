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

					<?php the_title( '<h3 class="titolo corsivo">', '</h3>' ); ?>

					<h2 class="sottotitolo maiuscolo"> <?php the_field('sottotitolo'); ?></h2>

				</div>




				
				<?php 
					$data_di_scadenza = get_field('data_di_scadenza');

					// Create DateTime object from value (formats must match).

					$scadenza = new DateTime($data_di_scadenza, new DateTimeZone('Europe/Rome'));

					$adesso = new DateTime( "",new DateTimeZone('Europe/Rome'));
					
					$intervallo = $scadenza->diff($adesso);
					$intervallos= $scadenza - $adesso;

					$giorni =  $intervallo ->days;

				?>


				<?php if ($giorni > 0): ?>
					<div class="cell timer small-12 medium-3 large-3">

						<div id="countdownOfferta_giorni" data-date="<?php echo get_field('data_di_scadenza') ;?>" style="width: 125px; height: 125px; padding: 0px; box-sizing: border-box;"></div>

					</div>
					<div class="cell timer small-6 medium-3 large-3">

		

				<?php else: ?>
					<div class="cell timer small-12 medium-3 large-3">
				<?php endif; ?>

						<div id="countdownOfferta_ore" data-date="<?php echo get_field('data_di_scadenza') ;?>" style="width: 125px; height: 125px; padding: 0px; box-sizing: border-box;"></div>

					</div>

				<div class="cell timer small-6 medium-3 large-3">

					<div id="countdownOfferta_minuti" data-date="<?php echo get_field('data_di_scadenza') ;?>" style="width: 125px; height: 125px; padding: 0px; box-sizing: border-box;"></div>
				</div>



					



					<?php if ($giorni < 1): ?>
						<div class="cell timer cell small-6 medium-3 large-3">

							<div id="countdownOfferta_secondi" data-date="<?php echo get_field('data_di_scadenza') ;?>" style="width: 125px; height: 125px; padding: 0px; box-sizing: border-box;"></div>
							</div>

					<?php endif; ?>
					


					<div id="offerta_scaduta" style="<?php if ($adesso  < $scadenza) { echo "display: none;"; }?>">

						<h2 class="offerta_scaduta">Questa offerta è scaduta.</h2>
					</div>


				<div class="cell prezzi">

					<h4 class="prezzo barrato"> <?php the_field('prezzo_intero'); ?>€</h4>
					<h2 class="prezzo"> <?php the_field('prezzo_ridotto'); ?>€</h2>

					<p class="commento_prezzo"> <?php the_field('commento_prezzo'); ?> </p>

				</div>
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








		<div class="grid-x">

		</div>
			<div class="cell form">

			<?php echo do_shortcode('[contact-form-7 id="46" title="Offerte a tempo"]'); ?>

			</div>


		</div>



	</main><!-- #main -->

<?php

get_footer();
