<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.3.3
 * 
 * Admin Panel Scripts & Styles
 * Created by CMSMasters
 * 
 */


function handmade_shop_admin_register($hook) {
	global $pagenow;
	
	$screen = get_current_screen();
	
	
	wp_enqueue_style('wp-color-picker');
	
	wp_enqueue_script('wp-color-picker');

	wp_localize_script( 'wp-color-picker', 'wpColorPickerL10n', array(
		'clear' => 				esc_attr__('Clear', 'handmade-shop'),
		'clearAriaLabel' => 	esc_attr__('Clear color', 'handmade-shop'),
		'defaultLabel' => 		esc_attr__('Color value', 'handmade-shop'),
		'defaultString' => 		esc_attr__('Default', 'handmade-shop'),
		'defaultAriaLabel' => 	esc_attr__('Select default color', 'handmade-shop'),
		'pick' => 				esc_attr__('Select Color', 'handmade-shop'),
	) ); 
	
	wp_enqueue_script('wp-color-picker-alpha', get_template_directory_uri() . '/framework/admin/inc/js/wp-color-picker-alpha.js', array('jquery', 'wp-color-picker'), '3.0.4', true);
	
	
	wp_enqueue_style('handmade-shop-admin-icons-font', get_template_directory_uri() . '/framework/admin/inc/css/admin-icons-font.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('handmade-shop-lightbox', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('handmade-shop-lightbox-rtl', get_template_directory_uri() . '/framework/admin/inc/css/jquery.cmsmastersLightbox-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('handmade-shop-uploader-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersUploader.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('handmade-shop-uploader-js', 'cmsmasters_admin_uploader', array( 
		'choose' => 				esc_attr__('Choose image', 'handmade-shop'), 
		'insert' => 				esc_attr__('Insert image', 'handmade-shop'), 
		'remove' => 				esc_attr__('Remove', 'handmade-shop'), 
		'edit_gallery' => 			esc_attr__('Edit gallery', 'handmade-shop') 
	));
	
	
	wp_enqueue_script('handmade-shop-lightbox-js', get_template_directory_uri() . '/framework/admin/inc/js/jquery.cmsmastersLightbox.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('handmade-shop-lightbox-js', 'cmsmasters_admin_lightbox', array( 
		'cancel' => 				esc_attr__('Cancel', 'handmade-shop'), 
		'insert' => 				esc_attr__('Insert', 'handmade-shop'), 
		'deselect' => 				esc_attr__('Deselect', 'handmade-shop'), 
		'choose_icon' => 			esc_attr__('Choose Icon', 'handmade-shop'), 
		'find_icons' => 			esc_attr__('Find icons', 'handmade-shop'), 
		'min_length' => 			esc_attr__('min 2 symbols', 'handmade-shop'), 
		'choose_font' => 			esc_attr__('Choose icons font', 'handmade-shop'), 
		'error_on_page' => 			esc_attr__("Error on page!\nReload page and try again.", 'handmade-shop') 
	));
	
	
	if ( 
		$hook == 'post.php' || 
		$hook == 'post-new.php' || 
		$hook == 'widgets.php' || 
		$hook == 'term.php' || 
		$hook == 'edit-tags.php' || 
		$hook == 'nav-menus.php' || 
		str_replace('cmsmasters-settings-element', '', $screen->id) != $screen->id 
	) {
		wp_enqueue_style('handmade-shop-icons', get_template_directory_uri() . '/css/fontello.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_style('handmade-shop-icons-custom', get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/css/fontello-custom.css', array(), '1.0.0', 'screen');
	}
	
	
	if ( 
		$hook == 'widgets.php' || 
		$hook == 'nav-menus.php' 
	) {
		wp_enqueue_media();
	}
	
	
	wp_enqueue_style('handmade-shop-admin-styles', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles.css', array(), '1.0.0', 'screen');
	
	if (is_rtl()) {
		wp_enqueue_style('handmade-shop-admin-styles-rtl', get_template_directory_uri() . '/framework/admin/inc/css/admin-theme-styles-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	wp_enqueue_script('handmade-shop-admin-scripts', get_template_directory_uri() . '/framework/admin/inc/js/admin-theme-scripts.js', array('jquery'), '1.0.0', true);
	
	
	if ($hook == 'widgets.php') {
		wp_enqueue_style('handmade-shop-widgets-styles', get_template_directory_uri() . '/framework/admin/inc/css/widgets-styles.css', array(), '1.0.0', 'screen');
		
		wp_enqueue_script('handmade-shop-widgets-scripts', get_template_directory_uri() . '/framework/admin/inc/js/widgets-scripts.js', array('jquery'), '1.0.0', true);
	}
}

add_action('admin_enqueue_scripts', 'handmade_shop_admin_register');

add_action('admin_enqueue_scripts', 'cmsmasters_composer_icons');

