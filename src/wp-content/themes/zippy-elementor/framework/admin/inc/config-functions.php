<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version		1.1.3
 * 
 * Theme and Plugin functions
 * Created by CMSMasters
 * 
 */


// Theme Settings Google Fonts List
if (!function_exists('cmsmasters_fonts_list')) {
	function cmsmasters_fonts_list() {
		$cmsmasters_option = handmade_shop_get_global_options();
		
		
		$google_web_fonts = array();
		
		
		if (isset($cmsmasters_option['handmade-shop' . '_google_web_fonts']) && is_array($cmsmasters_option['handmade-shop' . '_google_web_fonts'])) {
			$google_web_fonts_array = $cmsmasters_option['handmade-shop' . '_google_web_fonts'];
			
			
			foreach ($google_web_fonts_array as $google_web_font) {
				$google_web_font = explode('|', $google_web_font);
				
				$google_web_fonts[$google_web_font[0]] = $google_web_font[1];
			}
		}
		
		
		$local_fonts = array();
		
		if (class_exists('Cmsmasters_Custom_Fonts') && CMSMASTERS_CUSTOM_FONTS) {
			$local_fonts_query = new WP_Query(array(
				'post_type' => 'cmsmasters_font', 
				'orderby' => 'title', 
				'order' => 'ASC', 
				'posts_per_page' => -1 
			));
			
			
			if (count($local_fonts_query->posts) > 0) {
				foreach ($local_fonts_query->posts as $local_font) {
					$value = $local_font->ID . ':' . $local_font->post_title;
					
					$local_fonts[$value] = $local_font->post_title;
				}
			}
			
			wp_reset_postdata();
		}
		
		
		ksort($google_web_fonts);
		
		
		$fonts = array( 
			'' => esc_html__('None', 'handmade-shop'), 
			'local' => $local_fonts, 
			'web' => $google_web_fonts 
		);
		
		
		return apply_filters('handmade_shop_google_fonts_list_filter', $fonts);
	}
}



// Theme Settings Font Weights List
if (!function_exists('cmsmasters_font_weight_list')) {
	function cmsmasters_font_weight_list() {
		$list = array( 
			'default' => 	'default', 
			'normal' => 	'normal', 
			'100' => 		'100', 
			'200' => 		'200', 
			'300' => 		'300', 
			'400' => 		'400', 
			'500' => 		'500', 
			'600' => 		'600', 
			'700' => 		'700', 
			'800' => 		'800', 
			'900' => 		'900', 
			'bold' => 		'bold', 
			'bolder' => 	'bolder', 
			'lighter' => 	'lighter', 
		);
		
		
		return $list;
	}
}



// Theme Settings Font Styles List
if (!function_exists('cmsmasters_font_style_list')) {
	function cmsmasters_font_style_list() {
		$list = array( 
			'default' => 	'default', 
			'normal' => 	'normal', 
			'italic' => 	'italic', 
			'oblique' => 	'oblique', 
			'inherit' => 	'inherit', 
		);
		
		
		return $list;
	}
}



// Theme Settings Text Transforms List
if (!function_exists('cmsmasters_text_transform_list')) {
	function cmsmasters_text_transform_list() {
		$list = array( 
			'default' => esc_html__('default', 'handmade-shop'), 
			'none' => esc_html__('none', 'handmade-shop'), 
			'uppercase' => esc_html__('uppercase', 'handmade-shop'), 
			'lowercase' => esc_html__('lowercase', 'handmade-shop'), 
			'capitalize' => esc_html__('capitalize', 'handmade-shop'), 
		);
		
		
		return $list;
	}
}


// Theme Image Thumbnails Size
if (!function_exists('cmsmasters_image_thumbnail_list')) {
	function cmsmasters_image_thumbnail_list() {
		$list = handmade_shop_get_image_thumbnail_list();
		
		
		return $list;
	}
}



// Theme Settings Color Schemes List
if (!function_exists('cmsmasters_color_schemes_list')) {
	function cmsmasters_color_schemes_list() {
		$list = handmade_shop_all_color_schemes_list();
		
		
		unset($list['header']);
		
		unset($list['navigation']);
		
		unset($list['header_top']);
		
		
		$out = array_merge($list, handmade_shop_custom_color_schemes_list());
		
		
		return $out;
	}
}

