<?php
/**
 * personal blog functions and definitions
 *
 * @package probd-blocks
 */

defined( 'ABSPATH' ) || die();


require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueue.php';


use ProBD\Blocks\Setup;
use ProBD\Blocks\Enqueue_escripts;

new Setup();
new Enqueue_escripts();
