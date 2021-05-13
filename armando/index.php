<?php
/**
 * Without this file, WordPress will consider the theme broken.
 *
 * @package armando
 */

if ( current_user_can( 'activate_plugins' ) ) {
	esc_html_e( 'This theme is an experimental full site editing theme that requires the Gutenberg plugin. Activate the plugin to view the theme.', 'armando' );
}
