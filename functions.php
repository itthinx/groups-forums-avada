<?php

/**
 * Loads the stylesheet with necessary overrides.
 *
 * @author     itthinx
 * @link       https://www.itthinx.com
 * @package    Avada-child-Group-Forum
 * @since      1.0.0
 */

if (!defined('ABSPATH')) {
	exit;
}


/**
 * Enqueing parent and child theme style sheet.
 */
function theme_enqueue_styles() {
	wp_enqueue_style('avada-parent-stylesheet', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('avada-child-groups-forums', get_stylesheet_directory_uri() . '/style.css', array('avada-stylesheet'));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


add_filter('template_include', 'var_template_include', 1000);
function var_template_include($t)
{
	$GLOBALS['current_theme_template'] = basename($t);
	return $t;
}

function get_current_template($echo = false)
{
	if (!isset($GLOBALS['current_theme_template']))
		return false;
	if ($echo)
		echo $GLOBALS['current_theme_template'];
	else
		return $GLOBALS['current_theme_template'];
}
