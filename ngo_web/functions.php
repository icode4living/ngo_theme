<?php
if ( ! function_exists( 'ngoplus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress  
 * features.
 *
 * It is important to set up these functions before the init hook so
 * that none of these features are lost.
 *
 *  @since ngoplus 1.0
 */
function ngoplus_setup() { 
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats',  
    array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
 }
 function ngotheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'ngoheme_custom_excerpt_length', 999 );
?>
