<?php
/**
 * 
 * Plugin Name: Gutenberg Button
 * Plugin URI:  https://github.com/PauAdell/ButtonPlugin
 * Description: Additional Gutenberg button.
 * Version:     0.1
 * 
 * Author:      Pau Adell
 * 
 */

 namespace Guttenberg_Button;

 defined( 'ABSPATH' ) or die();

 function init_constants() {
    define( 'GUTENBERG_BUTTON_URL', untrailingslashit( plugin_dir_url(__FILE__) ) );
    define( 'GUTENBERG_BUTTON_PATH', untrailingslashit( plugin_dir_path(__FILE__) ) );
    /* define( 'GUTENBERG_BUTTON_VERSION', get_file_data( __FILE__, [ 'Version' ], 'plugin')[0] ) ); */
 }
 add_action( 'plugins_loaded', __NAMESPACE__ . '\init_constants', 1);