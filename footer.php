<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estetiquebeb
 */

?>

	<footer id="colophon" class="site-footer">

		<div class="grid-container">
			<div class="grid-x">

				<?php
					$featured_offerta = get_field('offerta_in_evidenza',48);
					if( $featured_offerta and !is_singular( 'offerte' )): 

						$post = $featured_offerta;
						setup_postdata($post);

						$immagine_copertina = get_field('immagine_copertina');
						
				?>
				
					<div class="cell offerta_in_evidenza_container" style="  background-image: url('<?php echo esc_url($immagine_copertina['url']);?> ')" >
						<div class="offerta_in_evidenza_testo"> 
							<h4 class="titolo corsivo">Offerta a tempo</h4>
							<h5 class="sottotitolo maiuscolo"><?php echo esc_html( $featured_offerta->post_title ); ?></h5>
							<a href="<?php the_permalink(); ?>" class="button">VAI ALL’ OFFERTA</a>
						</div>
						
					</div>
						
				<?php 
			  		wp_reset_postdata(); 
					endif; 
				?>

					
		

	
				<div class="cell titoli">

					
					<h3 class="titolo corsivo">offerte speciali e news</h3>

					<h2 class="sottotitolo maiuscolo">ISCRIVITI ALLA NEWSLETTER</h2>


				</div>

		



				<div class="cell newsletter_container cell small-10 medium-8 large-6 large-offset-3 medium-offset-2 small-offset-1">
					<div class="tnp tnp-subscription">
					<form method="post" action="https://www.estetiquebeb.com/?na=s" onsubmit="return newsletter_check(this)">

					<input type="hidden" name="nlang" value="">
					<div class="tnp-field tnp-field-email"><input class="tnp-email" type="email" name="ne" required placeholder="Email"></div>
					<div class="tnp-field tnp-privacy-field"><label><input type="checkbox" name="ny" required class="tnp-privacy"> Voglio ricevere mail promozionali riguardo le offerte di B&B Estetique.</label></div>
					<div class="tnp-field tnp-privacy-field"><label><input type="checkbox" name="ny" required class="tnp-privacy"> Accetto l’informativa sulla 
						<a href="https://www.iubenda.com/privacy-policy/92045316">privacy</a>.</label></div>

					<div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="Iscriviti" >
					</div>
					</form>
					</div>
				</div>

				<div class="cell map_container">
					 <div id="map">
					 	
					 </div>
					<!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1JGJBNKxMdAoqopOGXCjaift5A17FkviY" ></iframe> -->
				</div>

					<div class="cell testo_footer indirizzi small-12 medium-4 large-4">
						<?php the_field('campo_editable_sinistro',48); ?>
						

					</div>

					<div class="cell testo_footer indirizzi small-12 medium-4 large-4">
						<?php the_field('campo_editable_centro',48); ?>
						

					</div>

					<div class="cell orari small-12 medium-4 large-4">
						
						<?php the_field('campo_editable_destro',48); ?>
					</div>


				<div class="cell logo_container">
					<?php $immagine_logo = get_field('logo',48);?>

					<img src="<?php echo esc_url($immagine_logo['url']);?> ">


					<div class="policies">
					
					<a href="https://www.iubenda.com/privacy-policy/92045316" class="iubenda-white no-brand iubenda-embed" title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>

					<a href="https://www.iubenda.com/privacy-policy/92045316/cookie-policy" class="iubenda-white no-brand iubenda-embed" title="Cookie Policy ">Cookie Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>

					<a href="https://www.iubenda.com/termini-e-condizioni/92045316" class="iubenda-white no-brand iubenda-embed" title="Termini e Condizioni ">Termini e Condizioni</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
				</div>



				</div>

				



			</div>
		</div>





		

	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
