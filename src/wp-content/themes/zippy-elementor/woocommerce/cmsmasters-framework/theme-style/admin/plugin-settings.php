<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.1.4
 *
 * CMSMasters WooCommerce Admin Settings
 * Created by CMSMasters
 *
 */


/* Single Settings */
function handmade_shop_woocommerce_options_general_fields($options, $tab) {
	$defaults = handmade_shop_settings_general_defaults();

	if ($tab == 'header') {
		$options[] = array(
			'section' => 'header_section',
			'id' => 'handmade-shop' . '_woocommerce_cart_dropdown',
			'title' => esc_html__('Header WooCommerce Cart', 'handmade-shop'),
			'desc' => esc_html__('show', 'handmade-shop'),
			'type' => 'checkbox',
			'std' => $defaults[$tab]['handmade-shop' . '_woocommerce_cart_dropdown']
		);
	}

	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'handmade_shop_woocommerce_options_general_fields', 10, 2);

