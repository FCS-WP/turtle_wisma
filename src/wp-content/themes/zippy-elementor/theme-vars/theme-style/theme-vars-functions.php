<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.1.1
 * 
 * Theme Vars Functions
 * Created by CMSMasters
 * 
 */


/* Register CSS Styles */
function handmade_shop_vars_register_css_styles() {
	wp_enqueue_style('handmade-shop-theme-vars-style', get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/css/vars-style.css', array('handmade-shop-retina'), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'handmade_shop_vars_register_css_styles');

