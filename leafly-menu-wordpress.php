<?php
/*
Plugin Name: Leafly Menu for WordPress
Plugin URI: https://github.com/bmoredrew/Leafly-Menu-WordPress
Description: Easily embed a Leafly Menu into a page using a shortcode
Version: 0.1
Author: Drew Poland
Author URI: http://baltimoredrew.com/
License: GPL2
*/

if ( !defined( 'ABSPATH' ) ) exit;

/**
 * BD_Leafly_Embed class
 *
 * @class BD_Leafly_Embed The class that holds the entire BD_Leafly_Embed plugin
 */
class BD_Leafly_Embed {

    /**
     * Constructor for BD_Leafly_Embed class
     *
     * @uses add_shortcode()
     */
    public function __construct() {
        add_shortcode('leafly_menu', array( $this, 'leafly_shortcode' ) );
    }

    /**
     * Shortcode [leafly_menu]
     */
    public function leafly_shortcode( $atts = NULL, $content)  { 
    	
    	ob_start();
	    include dirname( __FILE__ ) . '/views/leafly-menu.php';
	    return ob_get_clean();

    }

} // BD_Leafly_Embed

new BD_Leafly_Embed();