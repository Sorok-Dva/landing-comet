<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Exposed
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
dynamic_sidebar( 'sidebar-1' );  