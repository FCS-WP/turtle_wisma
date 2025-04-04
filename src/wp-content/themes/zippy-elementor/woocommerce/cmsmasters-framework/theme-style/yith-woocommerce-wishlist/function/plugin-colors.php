<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.0.0
 * 
 * Yith WooCommerce Wishlist Colors Rules
 * Created by CMSMasters
 * 
 */


function handmade_shop_yith_woocommerce_wishlist_colors($custom_css) {
	$cmsmasters_option = handmade_shop_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Yith WooCommerce Wishlist Colors Scheme Rules ******************/
	
	/* Start Main Content Font Color */
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-price del {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-name a:hover,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-stock-status .wishlist-in-stock,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table tfoot td ul li a:hover,
	{$rule}.yith-wcwl-add-to-wishlist a:not(.button):hover,
	{$rule}.yith-wcwl-add-to-wishlist a:not(.button):after {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}#yith-wcwl-form .wishlist_manage_table thead th,
	{$rule}.products .product .cmsmasters_add_wishlist_button a.browse_wishlist,
	{$rule}.products .product .cmsmasters_add_wishlist_button a:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-search-form .wishlist-search-button,
	{$rule}#yith-wcwl-form .wishlist_manage_table thead th,
	{$rule}.submit-wishlist-changes,
	{$rule}.products .product .cmsmasters_add_wishlist_button a.browse_wishlist,
	{$rule}.products .product .cmsmasters_add_wishlist_button a:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.widget_yith-wcwl-lists ul.dropdown li a:hover,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-stock-status .wishlist-out-of-stock,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table tfoot td ul li a,
	{$rule}#yith-wcwl-form .wishlist_manage_table tbody .wishlist-name a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Main Background Color */
	{$rule}#yith-wcwl-form .wishlist_manage_table thead th,
	{$rule}.products .product .cmsmasters_add_wishlist_button a.browse_wishlist,
	{$rule}.products .product .cmsmasters_add_wishlist_button a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.products .product .cmsmasters_add_wishlist_button a,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-name a.yith-wcqv-button,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-name a.yith-wcqv-button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Headings Color */
	{$rule}.widget_yith-wcwl-lists ul.dropdown li a,
	{$rule}.products .product .cmsmasters_add_wishlist_button a,
	{$rule}#yith-wcwl-form.woocommerce table.wishlist_table td.product-name a,
	{$rule}.yith-wcwl-add-to-wishlist a:not(.button),
	{$rule}#yith-wcwl-form .wishlist_manage_table tbody .wishlist-name,
	{$rule}#yith-wcwl-form .wishlist_manage_table tbody .wishlist-name a,
	{$rule}#yith-wcwl-form .wishlist_manage_table tbody .wishlist-privacy {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Alternate Background Color */
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.widget_yith-wcwl-lists ul.dropdown li a,
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-search-form .wishlist-search-button:hover,
	{$rule}.submit-wishlist-changes:hover,
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-new button,
	{$rule}.selectBox-dropdown,
	{$rule}.yes-js .yith-wcwl-popup-content .yith-wcwl-wishlist-select-container select,
	{$rule}.yes-js .pp_woocommerce .yith-wcwl-popup-content .yith-wcwl-visibility select,
	{$rule}.products .product .cmsmasters_add_wishlist_button a,
	{$rule}#yith-wcwl-form .yith-wcwl-wishlist-new {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.woocommerce .yith-wcwl-wishlist-search-form #wishlist_search,
	{$rule}.woocommerce a.selectBox:hover,
	{$rule}.woocommerce a.selectBox {
		border-color:" . $cmsmasters_option['handmade-shop' . '_' . $scheme . '_border'] . " !important;
	}
	
	@media only screen and (max-width: 768px) {
		{$rule}#yith-wcwl-form.woocommerce table.wishlist_table,
		{$rule}#yith-wcwl-form.woocommerce table.wishlist_table tbody tr {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_border']) . "
		}
	}
	/* Finish Borders Color */
	
/***************** Finish {$title} Yith WooCommerce Wishlist Colors Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('handmade_shop_theme_colors_secondary_filter', 'handmade_shop_yith_woocommerce_wishlist_colors');

