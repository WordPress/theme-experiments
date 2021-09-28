<?php
/**
 * Without this file, WordPress will consider the theme broken.
 *
 * @package slick
 */

if ( current_user_can( 'activate_plugins' ) ) {
	esc_html_e( 'This theme was built for the WordPress experimental full site editing feature. You need to install and activate the Gutenberg plugin to make it work. ', 'slick' );
}

