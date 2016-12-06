<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package understrap
 */
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function understrap_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	return $classes;
}
add_filter( 'body_class', 'understrap_body_classes' );

// Removes tag class from the body_class array to avoid Bootstrap markup styling issues.

add_filter( 'body_class', 'adjust_body_class' );
function adjust_body_class( $classes ) {
 
    foreach ( $classes as $key => $value ) {
        if ( $value == 'tag' ) unset( $classes[ $key ] );
    }
 
    return $classes;
 
}
