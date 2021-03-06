<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package estetiquebeb
 */


?>

<div class="grid-x sovra_contenitore_corpo left">
	<div class="cell small-12 medium-6 large-6 contenitore_corpo left immagine ">
		 
			
		<div class="green_frame"> 
			<?php if( !empty( $immagine_blocco ) ): ?>
	
			<img class="immagine_blocco" src="<?php echo esc_url($immagine_blocco['url']); ?>" alt="<?php echo esc_attr($immagine_blocco['alt']); ?>" />
				
			<?php endif; ?>
	
		</div>
	
	</div>
	
	<div class="cell small-12 medium-6 large-6 contenitore_corpo left testo">
	
		<?php if( !empty( $titolo_blocco ) ): ?>
			<h4 class="titolo corsivo"> <?php echo $titolo_blocco; ?> </h4>	
		<?php endif; ?>
	
		<?php if( !empty( $sottotitolo_blocco ) ): ?>
			<h5 class="sottotitolo maiuscolo" > <?php echo $sottotitolo_blocco; ?> </h5>	
		<?php endif; ?>
	
		<?php if( !empty( $testo_blocco ) ): ?>
			<div class="testo_blocco" > <?php echo $testo_blocco; ?> </div>	
		<?php endif; ?>
	
	</div>
</div>