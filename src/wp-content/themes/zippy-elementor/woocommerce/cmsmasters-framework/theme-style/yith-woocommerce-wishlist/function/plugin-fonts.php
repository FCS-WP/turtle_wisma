<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.0.0
 * 
 * Yith WooCommerce Wishlist Fonts Rules
 * Created by CMSMasters
 * 
 */


function handmade_shop_yith_woocommerce_wishlist_fonts($custom_css) {
	$cmsmasters_option = handmade_shop_get_global_options();
	
	
	$custom_css .= "
/***************** Start Yith WooCommerce Wishlist Font Styles ******************/
	
	/* Start Content Font */
	#yith-wcwl-form.woocommerce table.wishlist_table td.product-price {
		font-size:" . ((int) $cmsmasters_option['handmade-shop' . '_content_font_font_size'] + 1) . "px;
	}
	
	#yith-wcwl-form.woocommerce table.wishlist_table td.product-price del {
		font-size:" . ((int) $cmsmasters_option['handmade-shop' . '_content_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['handmade-shop' . '_content_font_line_height'] - 4) . "px;
	}
	/* Finish Content Font */
	
	
	/* Start H3 Font */
	#yith-wcwl-form .wishlist_manage_table tbody .wishlist-name,
	#yith-wcwl-form .wishlist_manage_table tbody .wishlist-name a {
		font-family:" . handmade_shop_get_google_font($cmsmasters_option['handmade-shop' . '_h3_font_google_font']) . $cmsmasters_option['handmade-shop' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['handmade-shop' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['handmade-shop' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['handmade-shop' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['handmade-shop' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['handmade-shop' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['handmade-shop' . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */
	
	
	/* Start H5 Font */
	.widget_yith-wcwl-lists ul.dropdown li a,
	#yith-wcwl-form .wishlist_manage_table tbody .wishlist-privacy,
	#yith-wcwl-form.woocommerce table.wishlist_table tfoot .yith-wcwl-share-title
	#yith-wcwl-form .wishlist_manage_table thead th {
		font-family:" . handmade_shop_get_google_font($cmsmasters_option['handmade-shop' . '_h5_font_google_font']) . $cmsmasters_option['handmade-shop' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['handmade-shop' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['handmade-shop' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['handmade-shop' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['handmade-shop' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['handmade-shop' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['handmade-shop' . '_h5_font_text_decoration'] . ";
	}
	
	
	#yith-wcwl-form.woocommerce table.wishlist_table td.product-name a.yith-wcqv-button {
		height:" . ((int) $cmsmasters_option['handmade-shop' . '_h5_font_line_height'] - 2) . "px;
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	#yith-wcwl-form.woocommerce table.wishlist_table tbody td.product-add-to-cart .dateadded,
	.yith-wcwl-add-to-wishlist a:not(.button),
	.yith-wcwl-add-to-wishlist a:not(.button):after {
		font-family:" . handmade_shop_get_google_font($cmsmasters_option['handmade-shop' . '_h6_font_google_font']) . $cmsmasters_option['handmade-shop' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['handmade-shop' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['handmade-shop' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['handmade-shop' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['handmade-shop' . '_h6_font_font_style'] . ";
		text-decoration:" . $cmsmasters_option['handmade-shop' . '_h6_font_text_decoration'] . ";
	}
	
	.yith-wcwl-add-to-wishlist a:not(.button) {
		font-size:" . ((int) $cmsmasters_option['handmade-shop' . '_h6_font_font_size'] + 1) . "px;
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.yith-wcwl-add-to-wishlist .yith-wcwl-add-button a.add_to_wishlist.button i,
	#yith-wcwl-form .wishlist_manage_table tfoot .button,
	#yith-wcwl-form .wishlist_manage_table tfoot button,
	#yith-wcwl-form .yith-wcwl-wishlist-new button,
	#yith-wcwl-form .yith-wcwl-wishlist-search-form button,
	#yith-wcwl-form.woocommerce table.wishlist_table tfoot td .ask-an-estimate-button-container .button {
		line-height:" . $cmsmasters_option['handmade-shop' . '_button_font_line_height'] . "px;
	}
	
	#yith-wcwl-form.woocommerce table.wishlist_table td.product-add-to-cart > a {
		line-height:" . ((int) $cmsmasters_option['handmade-shop' . '_button_font_line_height'] - 4) . "px;
	}
	
	#yith-wcwl-form.woocommerce table.wishlist_table td.product-add-to-cart > a.selectBox {
		line-height:" . ((int) $cmsmasters_option['handmade-shop' . '_button_font_line_height'] - 10) . "px;
	}
	/* Finish Button Font */
	
	/* Start Text Fields Font */
	.selectBox-options li a {
		font-family:" . handmade_shop_get_google_font($cmsmasters_option['handmade-shop' . '_input_font_google_font']) . $cmsmasters_option['handmade-shop' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['handmade-shop' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['handmade-shop' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['handmade-shop' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['handmade-shop' . '_input_font_font_style'] . ";
	}
	
	.woocommerce .selectBox-dropdown .selectBox-label {
		font-size:" . $cmsmasters_option['handmade-shop' . '_input_font_font_size'] . "px;
	}
	/* Finish Text Fields Font */
	
/***************** Finish Yith WooCommerce Wishlist Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('handmade_shop_theme_fonts_filter', 'handmade_shop_yith_woocommerce_wishlist_fonts');

