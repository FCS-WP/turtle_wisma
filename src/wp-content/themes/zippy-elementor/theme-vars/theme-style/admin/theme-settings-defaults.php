<?php 
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version		1.2.8
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('handmade_shop_settings_general_defaults')) {

function handmade_shop_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'handmade-shop' . '_theme_layout' => 		'liquid', 
			'handmade-shop' . '_logo_type' => 			'image', 
			'handmade-shop' . '_logo_url' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'handmade-shop' . '_logo_url_retina' => 	'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'handmade-shop' . '_logo_title' => 			get_bloginfo('name') ? get_bloginfo('name') : 'Handmade Shop', 
			'handmade-shop' . '_logo_subtitle' => 		'', 
			'handmade-shop' . '_logo_custom_color' => 	0, 
			'handmade-shop' . '_logo_title_color' => 	'', 
			'handmade-shop' . '_logo_subtitle_color' => '' 
		), 
		'bg' => array( 
			'handmade-shop' . '_bg_col' => 			'#ffffff', 
			'handmade-shop' . '_bg_img_enable' => 	0, 
			'handmade-shop' . '_bg_img' => 			'', 
			'handmade-shop' . '_bg_rep' => 			'no-repeat', 
			'handmade-shop' . '_bg_pos' => 			'top center', 
			'handmade-shop' . '_bg_att' => 			'scroll', 
			'handmade-shop' . '_bg_size' => 		'cover' 
		), 
		'header' => array( 
			'handmade-shop' . '_fixed_header' => 				1, 
			'handmade-shop' . '_header_overlaps' => 			0, 
			'handmade-shop' . '_header_top_line' => 			0, 
			'handmade-shop' . '_header_top_height' => 			'45', 
			'handmade-shop' . '_header_top_line_short_info' => 	'', 
			'handmade-shop' . '_header_top_line_add_cont' => 	'nav', 
			'handmade-shop' . '_header_styles' => 				'c_nav', 
			'handmade-shop' . '_header_mid_height' => 			'290', 
			'handmade-shop' . '_header_bot_height' => 			'60', 
			'handmade-shop' . '_header_search' => 				1, 
			'handmade-shop' . '_header_add_cont' => 			'social', 
			'handmade-shop' . '_header_add_cont_cust_html' => 	'',
			'handmade-shop' . '_woocommerce_cart_dropdown' => 	0, 
		), 
		'content' => array( 
			'handmade-shop' . '_layout' => 					'r_sidebar', 
			'handmade-shop' . '_archives_layout' => 		'r_sidebar', 
			'handmade-shop' . '_search_layout' => 			'r_sidebar', 
			'handmade-shop' . '_other_layout' => 			'r_sidebar', 
			'handmade-shop' . '_heading_alignment' => 		'center', 
			'handmade-shop' . '_heading_scheme' => 			'first', 
			'handmade-shop' . '_heading_bg_image_enable' => 0, 
			'handmade-shop' . '_heading_bg_image' => 		'', 
			'handmade-shop' . '_heading_bg_repeat' => 		'no-repeat', 
			'handmade-shop' . '_heading_bg_attachment' => 	'scroll', 
			'handmade-shop' . '_heading_bg_size' => 		'cover', 
			'handmade-shop' . '_heading_bg_color' => 		'', 
			'handmade-shop' . '_heading_height' => 			'170', 
			'handmade-shop' . '_breadcrumbs' => 			1, 
			'handmade-shop' . '_bottom_scheme' => 			'second', 
			'handmade-shop' . '_bottom_sidebar' => 			0, 
			'handmade-shop' . '_bottom_sidebar_layout' => 	'121414' 
		), 
		'footer' => array( 
			'handmade-shop' . '_footer_scheme' => 				'footer', 
			'handmade-shop' . '_footer_type' => 				'small', 
			'handmade-shop' . '_footer_additional_content' => 	'nav', 
			'handmade-shop' . '_footer_logo' => 				1, 
			'handmade-shop' . '_footer_logo_url' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'handmade-shop' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'handmade-shop' . '_footer_nav' => 					1, 
			'handmade-shop' . '_footer_social' => 				1, 
			'handmade-shop' . '_footer_html' => 				'', 
			'handmade-shop' . '_footer_copyright' => 			'Handmade Shop' . ' ' . date('Y') . ' | ' . esc_html__('All Rights Reserved', 'handmade-shop') 
		) 
	);
	
	
	$settings = apply_filters('handmade_shop_settings_general_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Theme Settings Fonts Default Values */
if (!function_exists('handmade_shop_settings_font_defaults')) {

function handmade_shop_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'handmade-shop' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Hind:300,400,700', 
				'font_size' => 			'15', 
				'line_height' => 		'24', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'handmade-shop' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Hind:300,400,700', 
				'font_size' => 			'15', 
				'line_height' => 		'24', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'handmade-shop' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'handmade-shop' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Karla:400,700', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'handmade-shop' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Karla:400,700', 
				'font_size' => 			'12', 
				'line_height' => 		'20', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			) 
		), 
		'heading' => array( 
			'handmade-shop' . '_h1_font' => array( 
				'system_font' => 		"Georgia, Times, 'Century Schoolbook L', serif", 
				'google_font' => 		'Lora:400,400i,700,700i', 
				'font_size' => 			'30', 
				'line_height' => 		'38', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'handmade-shop' . '_h2_font' => array( 
				'system_font' => 		"Georgia, Times, 'Century Schoolbook L', serif", 
				'google_font' => 		'Lora:400,400i,700,700i', 
				'font_size' => 			'20', 
				'line_height' => 		'28', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'handmade-shop' . '_h3_font' => array( 
				'system_font' => 		"Georgia, Times, 'Century Schoolbook L', serif", 
				'google_font' => 		'Lora:400,400i,700,700i', 
				'font_size' => 			'16', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'handmade-shop' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Karla:400,700', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'handmade-shop' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Karla:400,700', 
				'font_size' => 			'12', 
				'line_height' => 		'16', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'handmade-shop' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Karla:400,700', 
				'font_size' => 			'13', 
				'line_height' => 		'16', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'handmade-shop' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Karla:400,700', 
				'font_size' => 			'12', 
				'line_height' => 		'38', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'handmade-shop' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Karla:400,700', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'handmade-shop' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Hind:300,400,700', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'handmade-shop' . '_quote_font' => array( 
				'system_font' => 		"Georgia, Times, 'Century Schoolbook L', serif", 
				'google_font' => 		'Lora:400,400i,700,700i', 
				'font_size' => 			'18', 
				'line_height' => 		'30', 
				'font_weight' => 		'normal', 
				'font_style' => 		'italic' 
			) 
		), 
		'google' => array( 
			'handmade-shop' . '_google_web_fonts' => array( 
				'Roboto:300,300italic,400,400italic,500,500italic,700,700italic|Roboto', 
				'Roboto+Condensed:400,400italic,700,700italic|Roboto Condensed', 
				'Open+Sans:300,300italic,400,400italic,700,700italic|Open Sans', 
				'Open+Sans+Condensed:300,300italic,700|Open Sans Condensed', 
				'Droid+Sans:400,700|Droid Sans', 
				'Droid+Serif:400,400italic,700,700italic|Droid Serif', 
				'PT+Sans:400,400italic,700,700italic|PT Sans', 
				'PT+Sans+Caption:400,700|PT Sans Caption', 
				'PT+Sans+Narrow:400,700|PT Sans Narrow', 
				'PT+Serif:400,400italic,700,700italic|PT Serif', 
				'Ubuntu:400,400italic,700,700italic|Ubuntu', 
				'Ubuntu+Condensed|Ubuntu Condensed', 
				'Headland+One|Headland One', 
				'Source+Sans+Pro:300,300italic,400,400italic,700,700italic|Source Sans Pro', 
				'Lato:400,400italic,700,700italic|Lato', 
				'Cuprum:400,400italic,700,700italic|Cuprum', 
				'Oswald:300,400,700|Oswald', 
				'Yanone+Kaffeesatz:300,400,700|Yanone Kaffeesatz', 
				'Lobster|Lobster', 
				'Lobster+Two:400,400italic,700,700italic|Lobster Two', 
				'Questrial|Questrial', 
				'Raleway:300,400,500,600,700|Raleway', 
				'Dosis:300,400,500,700|Dosis', 
				'Cutive+Mono|Cutive Mono', 
				'Quicksand:300,400,700|Quicksand', 
				'Montserrat:400,700|Montserrat', 
				'Cookie|Cookie', 
				'Hind:300,400,700|Hind', 
				'Karla:400,700|Karla', 
				'Lora:400,400i,700,700i|Lora', 
			) 
		) 
	);
	
	
	$settings = apply_filters('handmade_shop_settings_font_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#000000', 
		'#ffffff', 
		'#d43c18', 
		'#5173a6', 
		'#959595', 
		'#c0c0c0', 
		'#f4f4f4', 
		'#e1e1e1' 
	);
	
	
	return $palettes;
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('handmade_shop_color_schemes_defaults')) {

function handmade_shop_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#7b726f', 
			'link' => 		'#d68662', 
			'hover' => 		'#cec2bf', 
			'heading' => 	'#272220', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f8efea', 
			'border' => 	'#ebebeb' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'#848180', 
			'mid_link' => 		'#d68662', 
			'mid_hover' => 		'#cec2bf', 
			'mid_bg' => 		'#ffffff', 
			'mid_bg_scroll' => 	'#ffffff', 
			'mid_border' => 	'#ebebeb', 
			'bot_color' => 		'#848180', 
			'bot_link' => 		'#d68662', 
			'bot_hover' => 		'#cec2bf', 
			'bot_bg' => 		'#ffffff', 
			'bot_bg_scroll' => 	'#ffffff', 
			'bot_border' => 	'#ebebeb' 
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#272220', 
			'title_link_hover' => 		'#d68662', 
			'title_link_current' => 	'#d68662', 
			'title_link_subtitle' => 	'#cec2bf', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_bg_current' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_text' => 			'#848180', 
			'dropdown_bg' => 			'#ffffff', 
			'dropdown_border' => 		'#ebebeb', 
			'dropdown_link' => 			'#706663', 
			'dropdown_link_hover' => 	'#d68662', 
			'dropdown_link_subtitle' => '#cec2bf', 
			'dropdown_link_highlight' => '#ffffff', 
			'dropdown_link_border' => 	'#ffffff' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'#9f9895', 
			'link' => 					'#cec2bf', 
			'hover' => 					'#d68662', 
			'bg' => 					'#f5efec', 
			'border' => 				'#ffffff', 
			'title_link' => 			'#7c7573', 
			'title_link_hover' => 		'#482f26', 
			'title_link_bg' => 			'#f5efec', 
			'title_link_bg_hover' => 	'#f5efec', 
			'title_link_border' => 		'#f5efec', 
			'dropdown_bg' => 			'#ffffff', 
			'dropdown_border' => 		'#ebebeb', 
			'dropdown_link' => 			'#706663', 
			'dropdown_link_hover' => 	'#d68662', 
			'dropdown_link_highlight' => '#ffffff', 
			'dropdown_link_border' => 	'#ffffff' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'#848180', 
			'link' => 		'#706c6c', 
			'hover' => 		'#352e2b', 
			'heading' => 	'#272220', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f8f7f5', 
			'border' => 	'#dbdbdb' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'#baadaa', 
			'link' => 		'#848180', 
			'hover' => 		'#272220', 
			'heading' => 	'#272220', 
			'bg' => 		'#f8efea', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#ebebeb' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#848180', 
			'link' => 		'#706c6c', 
			'hover' => 		'#352e2b', 
			'heading' => 	'#272220', 
			'bg' => 		'#f8f7f5', 
			'alternate' => 	'#f8f7f5', 
			'border' => 	'#cfcdc9' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'#878787', 
			'link' => 		'#ff6c2f', 
			'hover' => 		'#3b3b3b', 
			'heading' => 	'#292929', 
			'bg' => 		'#fbfbfb', 
			'alternate' => 	'#ffffff', 
			'border' => 	'#e4e4e4' 
		) 
	);
	
	
	$settings = apply_filters('handmade_shop_color_schemes_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('handmade_shop_settings_element_defaults')) {

function handmade_shop_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'handmade-shop' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'handmade-shop' . '_social_icons' => array( 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'handmade-shop') . '|true||', 
				'cmsmasters-icon-instagram-1|#|' . esc_html__('Instagram', 'handmade-shop') . '|true||', 
				'cmsmasters-icon-facebook-1|#|' . esc_html__('Facebook', 'handmade-shop') . '|true||', 
				'cmsmasters-icon-gplus-1|#|' . esc_html__('Google+', 'handmade-shop') . '|true||', 
				'cmsmasters-icon-pinterest|#|' . esc_html__('Pinterest', 'handmade-shop') . '|true||' 
			) 
		), 
		'lightbox' => array( 
			'handmade-shop' . '_ilightbox_skin' => 					'dark', 
			'handmade-shop' . '_ilightbox_path' => 					'vertical', 
			'handmade-shop' . '_ilightbox_infinite' => 				0, 
			'handmade-shop' . '_ilightbox_aspect_ratio' => 			1, 
			'handmade-shop' . '_ilightbox_mobile_optimizer' => 		1, 
			'handmade-shop' . '_ilightbox_max_scale' => 			1, 
			'handmade-shop' . '_ilightbox_min_scale' => 			0.2, 
			'handmade-shop' . '_ilightbox_inner_toolbar' => 		0, 
			'handmade-shop' . '_ilightbox_smart_recognition' => 	0, 
			'handmade-shop' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'handmade-shop' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'handmade-shop' . '_ilightbox_controls_toolbar' => 		1, 
			'handmade-shop' . '_ilightbox_controls_arrows' => 		0, 
			'handmade-shop' . '_ilightbox_controls_fullscreen' => 	1, 
			'handmade-shop' . '_ilightbox_controls_thumbnail' => 	1, 
			'handmade-shop' . '_ilightbox_controls_keyboard' => 	1, 
			'handmade-shop' . '_ilightbox_controls_mousewheel' => 	1, 
			'handmade-shop' . '_ilightbox_controls_swipe' => 		1, 
			'handmade-shop' . '_ilightbox_controls_slideshow' => 	0 
		), 
		'sitemap' => array( 
			'handmade-shop' . '_sitemap_nav' => 		1, 
			'handmade-shop' . '_sitemap_categs' => 		1, 
			'handmade-shop' . '_sitemap_tags' => 		1, 
			'handmade-shop' . '_sitemap_month' => 		1, 
			'handmade-shop' . '_sitemap_pj_categs' => 	1, 
			'handmade-shop' . '_sitemap_pj_tags' => 	1 
		), 
		'error' => array( 
			'handmade-shop' . '_error_color' => 			'#d68662', 
			'handmade-shop' . '_error_bg_color' => 			'#ffffff', 
			'handmade-shop' . '_error_bg_img_enable' => 	0, 
			'handmade-shop' . '_error_bg_image' => 			'', 
			'handmade-shop' . '_error_bg_rep' => 			'no-repeat', 
			'handmade-shop' . '_error_bg_pos' => 			'top center', 
			'handmade-shop' . '_error_bg_att' => 			'scroll', 
			'handmade-shop' . '_error_bg_size' => 			'cover', 
			'handmade-shop' . '_error_search' => 			1, 
			'handmade-shop' . '_error_sitemap_button' => 	1, 
			'handmade-shop' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'handmade-shop' . '_custom_css' => 				'', 
			'handmade-shop' . '_custom_js' => 				'', 
			'handmade-shop' . '_gmap_api_key' => 			'', 
			'handmade-shop' . '_twitter_access_data' => 	array(), 
		), 
		'recaptcha' => array( 
			'handmade-shop' . '_recaptcha_public_key' => 	'', 
			'handmade-shop' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	$settings = apply_filters('handmade_shop_settings_element_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('handmade_shop_settings_single_defaults')) {

function handmade_shop_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'handmade-shop' . '_blog_post_layout' => 		'r_sidebar', 
			'handmade-shop' . '_blog_post_title' => 		1, 
			'handmade-shop' . '_blog_post_date' => 			1, 
			'handmade-shop' . '_blog_post_cat' => 			1, 
			'handmade-shop' . '_blog_post_author' => 		1, 
			'handmade-shop' . '_blog_post_comment' => 		1, 
			'handmade-shop' . '_blog_post_tag' => 			1, 
			'handmade-shop' . '_blog_post_like' => 			1, 
			'handmade-shop' . '_blog_post_nav_box' => 		1, 
			'handmade-shop' . '_blog_post_nav_order_cat' => 0, 
			'handmade-shop' . '_blog_post_share_box' => 	1, 
			'handmade-shop' . '_blog_post_author_box' => 	1, 
			'handmade-shop' . '_blog_more_posts_box' => 	'popular', 
			'handmade-shop' . '_blog_more_posts_count' => 	'3', 
			'handmade-shop' . '_blog_more_posts_pause' => 	'5' 
		), 
		'project' => array( 
			'handmade-shop' . '_portfolio_project_title' => 		1, 
			'handmade-shop' . '_portfolio_project_details_title' => '', 
			'handmade-shop' . '_portfolio_project_date' => 			1, 
			'handmade-shop' . '_portfolio_project_cat' => 			1, 
			'handmade-shop' . '_portfolio_project_author' => 		1, 
			'handmade-shop' . '_portfolio_project_comment' => 		0, 
			'handmade-shop' . '_portfolio_project_tag' => 			0, 
			'handmade-shop' . '_portfolio_project_like' => 			1, 
			'handmade-shop' . '_portfolio_project_link' => 			0, 
			'handmade-shop' . '_portfolio_project_share_box' => 	1, 
			'handmade-shop' . '_portfolio_project_nav_box' => 		1, 
			'handmade-shop' . '_portfolio_project_nav_order_cat' => 0, 
			'handmade-shop' . '_portfolio_project_author_box' => 	1, 
			'handmade-shop' . '_portfolio_more_projects_box' => 	'popular', 
			'handmade-shop' . '_portfolio_more_projects_count' => 	'4', 
			'handmade-shop' . '_portfolio_more_projects_pause' => 	'5', 
			'handmade-shop' . '_portfolio_project_slug' => 			'project', 
			'handmade-shop' . '_portfolio_pj_categs_slug' => 		'pj-categs', 
			'handmade-shop' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'handmade-shop' . '_profile_post_title' => 			1, 
			'handmade-shop' . '_profile_post_details_title' => 	'', 
			'handmade-shop' . '_profile_post_cat' => 			1, 
			'handmade-shop' . '_profile_post_comment' => 		1, 
			'handmade-shop' . '_profile_post_like' => 			1, 
			'handmade-shop' . '_profile_post_nav_box' => 		1, 
			'handmade-shop' . '_profile_post_nav_order_cat' => 	0,
			'handmade-shop' . '_profile_post_share_box' => 		1, 
			'handmade-shop' . '_profile_post_slug' => 			'profile', 
			'handmade-shop' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	$settings = apply_filters('handmade_shop_settings_single_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('handmade_shop_project_puzzle_proportion')) {

function handmade_shop_project_puzzle_proportion() {
	return 1;
}

}



/* Project Puzzle Proportion */
if (!function_exists('handmade_shop_project_puzzle_large_gar_parameters')) {

function handmade_shop_project_puzzle_large_gar_parameters() {
	$parameter = array ( 
		'container_width' 		=> 1160, 
		'bottomStaticPadding' 	=> 2 
	);
	
	
	return $parameter;
}

}



/* Theme Image Thumbnails Size */
if (!function_exists('handmade_shop_get_image_thumbnail_list')) {

function handmade_shop_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		70, 
			'height' => 	70, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		360, 
			'height' => 	360, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'handmade-shop') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	580, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'handmade-shop') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	580, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project', 'handmade-shop') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Project', 'handmade-shop') 
		), 
		'cmsmasters-profile-thumb' => array( 
			'width' => 		380, 
			'height' => 	292, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Profile', 'handmade-shop') 
		), 
		'post-thumbnail' => array( 
			'width' => 		860, 
			'height' => 	560, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'handmade-shop') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'handmade-shop') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	600, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'handmade-shop') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	600, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Full', 'handmade-shop') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'handmade-shop') 
		) 
	);
	
	
	return $list;
}

}



/* Project Post Type Registration Rename */
if (!function_exists('handmade_shop_project_labels')) {

function handmade_shop_project_labels() {
	return array( 
		'name' => 					esc_html__('Projects', 'handmade-shop'), 
		'singular_name' => 			esc_html__('Project', 'handmade-shop'), 
		'menu_name' => 				esc_html__('Projects', 'handmade-shop'), 
		'all_items' => 				esc_html__('All Projects', 'handmade-shop'), 
		'add_new' => 				esc_html__('Add New', 'handmade-shop'), 
		'add_new_item' => 			esc_html__('Add New Project', 'handmade-shop'), 
		'edit_item' => 				esc_html__('Edit Project', 'handmade-shop'), 
		'new_item' => 				esc_html__('New Project', 'handmade-shop'), 
		'view_item' => 				esc_html__('View Project', 'handmade-shop'), 
		'search_items' => 			esc_html__('Search Projects', 'handmade-shop'), 
		'not_found' => 				esc_html__('No projects found', 'handmade-shop'), 
		'not_found_in_trash' => 	esc_html__('No projects found in Trash', 'handmade-shop') 
	);
}

}

// add_filter('cmsmasters_project_labels_filter', 'handmade_shop_project_labels');


if (!function_exists('handmade_shop_pj_categs_labels')) {

function handmade_shop_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Project Categories', 'handmade-shop'), 
		'singular_name' => 			esc_html__('Project Category', 'handmade-shop') 
	);
}

}

// add_filter('cmsmasters_pj_categs_labels_filter', 'handmade_shop_pj_categs_labels');


if (!function_exists('handmade_shop_pj_tags_labels')) {

function handmade_shop_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Project Tags', 'handmade-shop'), 
		'singular_name' => 			esc_html__('Project Tag', 'handmade-shop') 
	);
}

}

// add_filter('cmsmasters_pj_tags_labels_filter', 'handmade_shop_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('handmade_shop_profile_labels')) {

function handmade_shop_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'handmade-shop'), 
		'singular_name' => 			esc_html__('Profiles', 'handmade-shop'), 
		'menu_name' => 				esc_html__('Profiles', 'handmade-shop'), 
		'all_items' => 				esc_html__('All Profiles', 'handmade-shop'), 
		'add_new' => 				esc_html__('Add New', 'handmade-shop'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'handmade-shop'), 
		'edit_item' => 				esc_html__('Edit Profile', 'handmade-shop'), 
		'new_item' => 				esc_html__('New Profile', 'handmade-shop'), 
		'view_item' => 				esc_html__('View Profile', 'handmade-shop'), 
		'search_items' => 			esc_html__('Search Profiles', 'handmade-shop'), 
		'not_found' => 				esc_html__('No Profiles found', 'handmade-shop'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'handmade-shop') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'handmade_shop_profile_labels');


if (!function_exists('handmade_shop_pl_categs_labels')) {

function handmade_shop_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'handmade-shop'), 
		'singular_name' => 			esc_html__('Profile Category', 'handmade-shop') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'handmade_shop_pl_categs_labels');

