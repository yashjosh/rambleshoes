<?php
/*
Plugin Name: WP Final Project
Description: This plugin replaces words with your own choice of words.
Version:     1.0
Author:      Kunal Patel
Author URI:  http://link to your website
License:     kp
License URI: https://link to your plugin license

*/

/*Use this function to replace a single word*/

function renym_wordpress_typo_fix( $text ) {
	return str_replace( 'wordpress', 'WordPress', $text );
}
add_filter( 'the_content', 'renym_wordpress_typo_fix' );

/*Or use this function to replace multiple words or phrases at once*/
function renym_content_replace( $content ) {
	$search  = array( 'wordpress', 'goat', 'Easter', '70', 'sensational' );
	$replace = array( 'WordPress', 'coffee', 'Easter holidays', 'seventy', 'extraordinary' );
	return str_replace( $search, $replace, $content );
}
add_filter( 'the_content', 'renym_content_replace' );



?>