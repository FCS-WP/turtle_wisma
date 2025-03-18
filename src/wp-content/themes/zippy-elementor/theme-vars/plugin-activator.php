<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.3.5
 * 
 * TGM-Plugin-Activation 2.6.1
 * Created by CMSMasters
 * 
 */


require_once(get_template_directory() . '/framework/class/class-tgm-plugin-activation.php');


if (!function_exists('handmade_shop_register_theme_plugins')) {

function handmade_shop_register_theme_plugins() { 
	$plugins = array( 
		array( 
			'name'					=> esc_html__('CMSMasters Content Composer', 'handmade-shop'), 
			'slug'					=> 'cmsmasters-content-composer', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-content-composer.zip', 
			'required'				=> true, 
			'version'				=> '2.5.5', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Mega Menu', 'handmade-shop'), 
			'slug'					=> 'cmsmasters-mega-menu', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-mega-menu.zip', 
			'required'				=> true, 
			'version'				=> '1.2.9', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Custom Fonts', 'handmade-shop'), 
			'slug'					=> 'cmsmasters-custom-fonts', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-custom-fonts.zip', 
			'required'				=> true, 
			'version'				=> '1.0.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('CMSMasters Importer', 'handmade-shop'), 
			'slug'					=> 'cmsmasters-importer', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/cmsmasters-importer.zip', 
			'required'				=> true, 
			'version'				=> '1.0.8', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('LayerSlider WP', 'handmade-shop'), 
			'slug' 					=> 'LayerSlider', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/LayerSlider.zip', 
			'required'				=> false, 
			'version'				=> '7.14.1', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name' 					=> esc_html__('Revolution Slider', 'handmade-shop'), 
			'slug' 					=> 'revslider', 
			'source'				=> get_template_directory() . '/theme-vars/plugins/revslider.zip', 
			'required'				=> false, 
			'version'				=> '6.7.29', 
			'force_activation'		=> false, 
			'force_deactivation' 	=> false 
		), 
		array( 
			'name'					=> esc_html__('Envato Market', 'handmade-shop'), 
			'slug'					=> 'envato-market', 
			'source'				=> 'https://envato.github.io/wp-envato-market/dist/envato-market.zip', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('GDPR Cookie Consent', 'handmade-shop'), 
			'slug'					=> 'cookie-law-info', 
			'required'				=> false 
		), 
		array( 
			'name' 					=> esc_html__('WooCommerce', 'handmade-shop'), 
			'slug' 					=> 'woocommerce', 
			'required'				=> false 
		),
		array( 
			'name'					=> esc_html__('Instagram Feed', 'handmade-shop'), 
			'slug'					=> 'instagram-feed', 
			'required'				=> false 
 		), 
		array( 
			'name' 					=> esc_html__('Contact Form 7', 'handmade-shop'), 
			'slug' 					=> 'contact-form-7', 
			'required' 				=> false 
		), 
		array( 
			'name'					=> esc_html__('MailPoet 3', 'handmade-shop'), 
			'slug'					=> 'mailpoet', 
			'required'				=> false 
		), 
		array( 
			'name'					=> esc_html__('Yith WooCommerce Ajax Search', 'handmade-shop'), 
			'slug'					=> 'yith-woocommerce-ajax-search', 
			'required'				=> false 
 		), 
		array( 
			'name'					=> esc_html__('Yith WooCommerce Quick View', 'handmade-shop'), 
			'slug'					=> 'yith-woocommerce-quick-view', 
			'required'				=> false 
 		), 
		array( 
			'name'					=> esc_html__('Yith WooCommerce Wishlist', 'handmade-shop'), 
			'slug'					=> 'yith-woocommerce-wishlist', 
			'required'				=> false 
 		), 
		array( 
			'name'					=> esc_html__('Yith WooCommerce Zoom Magnifier', 'handmade-shop'), 
			'slug'					=> 'yith-woocommerce-zoom-magnifier', 
			'required'				=> false 
 		)  
	);
	
	
	$config = array( 
		'id' => 			'handmade-shop', 
		'menu' => 			'theme-required-plugins', 
		'strings' => array( 
			'page_title' => 	esc_html__('Theme Required & Recommended Plugins', 'handmade-shop'), 
			'menu_title' => 	esc_html__('Theme Plugins', 'handmade-shop'), 
			'return' => 		esc_html__('Return to Theme Required & Recommended Plugins', 'handmade-shop') 
		) 
	);
	
	
	tgmpa($plugins, $config);
}

}

add_action('tgmpa_register', 'handmade_shop_register_theme_plugins');

