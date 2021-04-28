<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php

if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}

echo( '<h4>The following is an HTML template rendered by do_blocks</h4>' );
echo do_blocks( file_get_contents( get_stylesheet_directory() . '/block-templates-files/index.html' ) );

wp_footer(); 
?>

</body>
</html>
