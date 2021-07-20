<?php

function goose_scripts() {
	wp_enqueue_style( 'goose-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'goose_scripts' );

?>