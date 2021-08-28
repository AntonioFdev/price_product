// Añadimos este código al functions.php del tema actual para comprobar el precio que WooCommerce toma para el producto. 
// Sirve para hacer debug si tienes problemas relacionados con los precios de producto.

add_action( 'wp_head', function() {
	if ( is_product() ) {
		$product = wc_get_product();
		var_dump( wc_get_price_to_display( $product ) );
		var_dump( wc_price( wc_get_price_to_display( $product ) ) );
		var_dump( strip_tags( wc_price( wc_get_price_to_display( $product ) ) ) );
		die();
	}
} );
