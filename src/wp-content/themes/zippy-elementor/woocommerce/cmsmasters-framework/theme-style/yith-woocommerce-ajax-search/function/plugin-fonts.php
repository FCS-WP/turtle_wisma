<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.0.3
 * 
 * Yith WooCommerce Ajax Search Fonts Rules
 * Created by CMSMasters
 * 
 */


function handmade_shop_yith_woocommerce_ajax_search_fonts($custom_css) {
	$cmsmasters_option = handmade_shop_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Ajax Search Font Styles ******************/
	
	/* Start Content Font */
	.yith_woocommerce_ajax_search .yith-ajaxsearchform-container .autocomplete-suggestions > div {
		font-family:" . handmade_shop_get_google_font($cmsmasters_option['handmade-shop' . '_content_font_google_font']) . $cmsmasters_option['handmade-shop' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['handmade-shop' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['handmade-shop' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['handmade-shop' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['handmade-shop' . '_content_font_font_style'] . ";
	}
	
	.autocomplete-suggestions .autocomplete-suggestion .yith_wcas_result_excerpt {
		font-size:" . ((int) $cmsmasters_option['handmade-shop' . '_content_font_font_size'] - 1) . "px;
	}
	
	.autocomplete-suggestions .autocomplete-suggestion .yith_wcas_result_categories,
	.autocomplete-suggestions .autocomplete-suggestion del {
		font-size:" . ((int) $cmsmasters_option['handmade-shop' . '_content_font_font_size'] - 2) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start H5 Font */
	.autocomplete-suggestions .autocomplete-suggestion .yith_wcas_result_content ins,
	.woocommerce .autocomplete-suggestion .title,
	.autocomplete-suggestions .autocomplete-suggestion .yith_wcas_result_content > span.amount {
		font-family:" . handmade_shop_get_google_font($cmsmasters_option['handmade-shop' . '_h5_font_google_font']) . $cmsmasters_option['handmade-shop' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['handmade-shop' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['handmade-shop' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['handmade-shop' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['handmade-shop' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['handmade-shop' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['handmade-shop' . '_h5_font_text_decoration'] . ";
	}
	/* Finish H5 Font */
	
	
	/* Start Text Fields Font */
	.yith_woocommerce_ajax_search .yith-ajaxsearchform-container .autocomplete-suggestions > div {
		font-family:" . handmade_shop_get_google_font($cmsmasters_option['handmade-shop' . '_input_font_google_font']) . $cmsmasters_option['handmade-shop' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['handmade-shop' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['handmade-shop' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['handmade-shop' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['handmade-shop' . '_input_font_font_style'] . ";
	}
	/* Finish Text Fields Font */
	
/***************** Finish Yith WooCommerce Ajax Search Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('handmade_shop_theme_fonts_filter', 'handmade_shop_yith_woocommerce_ajax_search_fonts');

