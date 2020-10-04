<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );




?>

	<main id="primary" class="site-main">

		<div class="grid-container">
			<div class="grid-x">

				<div class="cell immagine_copertina">
					<?php 
						$immagine_copertina = get_field('immagine_copertina',345);
						if( !empty( $immagine_copertina ) ): ?>

					    	<img class="immagine_copertina" src="<?php echo esc_url($immagine_copertina['url']); ?>" alt="<?php echo esc_attr($immagine_copertina['alt']); ?>" />

					<?php endif; ?>
				</div>

				<div class="cell titoli">

					<h3 class="titolo corsivo">Fai un regalo</h3>

					<h2 class="sottotitolo maiuscolo"> <?php the_field('sottotitolo',345); ?></h2>


				</div>

			</div>
			
				<?php
				// Check rows exists.
				if( have_rows('post_body',345) ):

					$contatore_corpo=0;
				
				    // Loop through rows.
				    while( have_rows('post_body',345) ) : the_row();


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
	


<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)

 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>


<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			
			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
	?>	
		</div>
		</div>

	</main><!-- #main -->

<?php
get_footer( 'shop' );
