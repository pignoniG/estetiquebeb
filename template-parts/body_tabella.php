<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package estetiquebeb
 */

?>
<div class="grid-x sovra_contenitore_corpo">
	<div class="cell small-12 medium-12 large-12 contenitore_corpo tabella">
	
		<?php if( !empty( $titolo_blocco ) ): ?>
			<h4 class="titolo corsivo"> <?php echo $titolo_blocco; ?> </h4>	
		<?php endif; ?>
	
		<?php if( !empty( $sottotitolo_blocco ) ): ?>
			<h5 class="sottotitolo maiuscolo" > <?php echo $sottotitolo_blocco; ?> </h5>	
		<?php endif; ?>
	
		<?php 
	
	
			if ( ! empty ( $tabella_blocco ) ) {
	
	    echo '<table border="0">';
	
	        if ( ! empty( $tabella_blocco['caption'] ) ) {
	
	            echo '<caption>' . $tabella_blocco['caption'] . '</caption>';
	        }
	
	        if ( ! empty( $tabella_blocco['header'] ) ) {
	
	            echo '<thead>';
	
	                echo '<tr>';
	
	                    foreach ( $tabella_blocco['header'] as $th ) {
	
	                        echo '<th>';
	                            echo $th['c'];
	                        echo '</th>';
	                    }
	
	                echo '</tr>';
	
	            echo '</thead>';
	        }
	
	        echo '<tbody>';
	            foreach ( $tabella_blocco['body'] as $tr ) {
	
	                echo '<tr>';
	                    foreach ( $tr as $td ) {
	                        echo '<td>';
	                            echo $td['c'];
	                        echo '</td>';
	                    }
	                echo '</tr>';
	            }
	
	        echo '</tbody>';
	
	    echo '</table>';
	}
	
	
	?>
	
	</div>
</div>
