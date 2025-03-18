<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.0.0
 * 
 * Yith WooCommerce Zoom Magnifier Fonts Rules
 * Created by CMSMasters
 * 
 */


function handmade_shop_yith_woocommerce_zoom_magnifier_fonts($custom_css) {
	$cmsmasters_option = handmade_shop_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Zoom Magnifier Font Styles ******************/
	
	
	
/***************** Finish Yith WooCommerce Zoom Magnifier Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('handmade_shop_theme_fonts_filter', 'handmade_shop_yith_woocommerce_zoom_magnifier_fonts');

