<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.0.1
 * 
 * Yith WooCommerce Quick View Colors Rules
 * Created by CMSMasters
 * 
 */


function handmade_shop_yith_woocommerce_quick_view_colors($custom_css) {
	$cmsmasters_option = handmade_shop_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Yith WooCommerce Quick View Colors Scheme Rules ******************/
	
	/* Start Main Content Font Color */
	{$rule}.yith-quick-view .yith-wcqv-head .yith-quick-view-close:before,
	{$rule}#yith-quick-view-modal .single-product .price del,
	{$rule}.yith-quick-view.slide-in .single-product .price del,
	{$rule}.yith-quick-view.fade-in .single-product .price del,
	{$rule}.yith-quick-view.scale-up .single-product .price del,
	{$rule}.yith-quick-view.yith-inline .single-product .price del {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.cmsmasters_product_category_shortcode.puzzle li.product .cmsmasters_product .button.cmsmasters_quick_view_button,
	{$rule}#yith-quick-view-modal .single-product .product_meta a:hover,
	{$rule}#yith-quick-view-modal .single-product .product_meta > span a:hover,
	{$rule}.yith-wcqv-close:hover,
	{$rule}.cmsmasters_product_category_shortcode.puzzle .products .product .cmsmasters_product_add_inner .cmsmasters_add_wishlist_button a,
	{$rule}.yith-wcqv-button:not(.button) span:hover,
	{$rule}.yith-quick-view.slide-in .single-product .product_meta a:hover,
	{$rule}.yith-quick-view.fade-in .single-product .product_meta a:hover,
	{$rule}.yith-quick-view.scale-in .single-product .product_meta a:hover,
	{$rule}.yith-quick-view.slide-in .single-product .product_meta > span a:hover,
	{$rule}.yith-quick-view.fade-in .single-product .product_meta > span a:hover,
	{$rule}.yith-quick-view.scale-in .single-product .product_meta > span a:hover,
	{$rule}.yith-quick-view.yith-inline .single-product .product_meta a:hover,
	{$rule}.yith-quick-view.yith-inline .single-product .product_meta > span a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_product .button.cmsmasters_quick_view_button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}html .yith-quick-view.slide-in .single-product .yith-wcqv-view-details, 
	{$rule}html .yith-quick-view.fade-in .single-product .yith-wcqv-view-details, 
	{$rule}html .yith-quick-view.scale-in .single-product .yith-wcqv-view-details,
	{$rule}.cmsmasters_product .button.cmsmasters_quick_view_button:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.yith-quick-view .single-product div.summary .product_meta a:hover, 
	{$rule}#yith-quick-view-modal .single-product div.summary .product_meta a:hover,
	{$rule}#yith-quick-view-modal .single-product .product_meta > span,
	{$rule}#yith-quick-view-modal .single-product .product_meta > span a,
	{$rule}.yith-wcqv-close,
	{$rule}.yith-quick-view.slide-in .single-product .product_meta > span,
	{$rule}.yith-quick-view.fade-in .single-product .product_meta > span,
	{$rule}.yith-quick-view.scale-in .single-product .product_meta > span,
	{$rule}.yith-quick-view.slide-in .single-product .product_meta > span a,
	{$rule}.yith-quick-view.fade-in .single-product .product_meta > span a,
	{$rule}.yith-quick-view.scale-in .single-product .product_meta > span a,
	{$rule}.yith-quick-view.yith-inline .single-product .product_meta > span,
	{$rule}.yith-quick-view.yith-inline .single-product .product_meta > span a {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.yith-quick-view .single-product div.summary .product_meta, 
	{$rule}.yith-quick-view .single-product div.summary .product_meta a, 
	{$rule}#yith-quick-view-modal .single-product div.summary .product_meta,
	{$rule}#yith-quick-view-modal .single-product div.summary .product_meta a,
	{$rule}.cmsmasters_product .button.cmsmasters_quick_view_button,
	{$rule}#yith-quick-view-modal .single-product .product_meta a,
	{$rule}#yith-quick-view-modal .single-product .product_meta > span .cmsmasters_product_meta_title,
	{$rule}.yith-wcqv-button:not(.button) span,
	{$rule}.yith-quick-view.slide-in .single-product .product_meta a,
	{$rule}.yith-quick-view.fade-in .single-product .product_meta a,
	{$rule}.yith-quick-view.scale-in .single-product .product_meta a,
	{$rule}.yith-quick-view.slide-in .single-product .product_meta > span .cmsmasters_product_meta_title,
	{$rule}.yith-quick-view.fade-in .single-product .product_meta > span .cmsmasters_product_meta_title,
	{$rule}.yith-quick-view.scale-in .single-product .product_meta > span .cmsmasters_product_meta_title,
	{$rule}.yith-quick-view.yith-inline .single-product .product_meta a,
	{$rule}.yith-quick-view.yith-inline .single-product .product_meta > span .cmsmasters_product_meta_title {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.yith-quick-view.slide-in .single-product .yith-wcqv-view-details,
	{$rule}.yith-quick-view.fade-in .single-product .yith-wcqv-view-details,
	{$rule}.yith-quick-view.scale-in .single-product .yith-wcqv-view-details {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.cmsmasters_product_category_shortcode.puzzle li.product .cmsmasters_product .button.cmsmasters_quick_view_button:hover,
	{$rule}.cmsmasters_product .button.cmsmasters_quick_view_button:hover,
	{$rule}.cmsmasters_product_category_shortcode.puzzle .products .product .cmsmasters_product_add_inner .cmsmasters_add_wishlist_button a:hover,
	{$rule}.cmsmasters_product_category_shortcode.puzzle .products .product .cmsmasters_product_add_inner .cmsmasters_add_wishlist_button a.browse_wishlist {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_product .button.cmsmasters_quick_view_button,
	{$rule}.yith-wcqv-main,
	{$rule}html #yith-quick-view-modal .yith-wcqv-head #yith-quick-view-close,
	{$rule}html #yith-quick-view-modal .yith-wcqv-head #yith-quick-view-close:before,
	{$rule}.yith-wcqv-button:not(.button) span,
	{$rule}html .yith-quick-view.slide-in .yith-wcqv-head #yith-quick-view-close,
	{$rule}html .yith-quick-view.fade-in .yith-wcqv-head #yith-quick-view-close,
	{$rule}html .yith-quick-view.scale-in .yith-wcqv-head #yith-quick-view-close,
	{$rule}html .yith-quick-view.slide-in .yith-wcqv-head #yith-quick-view-close:before,
	{$rule}html .yith-quick-view.fade-in .yith-wcqv-head #yith-quick-view-close:before,
	{$rule}html .yith-quick-view.scale-in .yith-wcqv-head #yith-quick-view-close:before,
	{$rule}html .yith-quick-view.slide-in .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand,
	{$rule}html .yith-quick-view.fade-in .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand,
	{$rule}html .yith-quick-view.scale-in .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand,
	{$rule}.yith-quick-view.yith-inline .yith-wcqv-head #yith-quick-view-close,
	{$rule}.yith-quick-view.yith-inline .yith-wcqv-head #yith-quick-view-close:before,
	{$rule}.yith-quick-view.yith-inline .single-product > .product > .product > div.images .yith_magnifier_zoom_wrap .yith_magnifier_mousetrap .yith_expand {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Borders Color */
	{$rule}.yith-quick-view.slide-in .single-product .yith-wcqv-view-details:hover, 
	{$rule}.yith-quick-view.fade-in .single-product .yith-wcqv-view-details:hover, 
	{$rule}.yith-quick-view.scale-in .single-product .yith-wcqv-view-details:hover,
	{$rule}html .yith-quick-view.slide-in .single-product div.summary .share_posts_inner a, 
	{$rule}html .yith-quick-view.fade-in .single-product div.summary .share_posts_inner a, 
	{$rule}html .yith-quick-view.scale-up .single-product div.summary .share_posts_inner a,
	{$rule}.cmsmasters_product .button.cmsmasters_quick_view_button,
	{$rule}#yith-quick-view-modal .single-product .cmsmasters_product_info_wrap,
	{$rule}#yith-quick-view-modal .single-product .product_meta,
	{$rule}#yith-quick-view-modal .single-product .cmsmasters_product_right_column .share_posts,
	{$rule}#yith-quick-view-modal .yith-wcqv-head #yith-quick-view-close,
	{$rule}html .yith-quick-view.slide-in .yith-wcqv-head .yith-quick-view-close,
	{$rule}.yith-quick-view.slide-in .single-product .cmsmasters_product_info_wrap,
	{$rule}.yith-quick-view.fade-in .single-product .cmsmasters_product_info_wrap,
	{$rule}.yith-quick-view.scale-in .single-product .cmsmasters_product_info_wrap,
	{$rule}.yith-quick-view.slide-in .single-product .product_meta,
	{$rule}.yith-quick-view.fade-in .single-product .product_meta,
	{$rule}.yith-quick-view.scale-in .single-product .product_meta,
	{$rule}.yith-quick-view.slide-in .yith-wcqv-head #yith-quick-view-close,
	{$rule}.yith-quick-view.fade-in .yith-wcqv-head #yith-quick-view-close,
	{$rule}.yith-quick-view.scale-in .yith-wcqv-head #yith-quick-view-close,
	{$rule}html .yith-quick-view.slide-in .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb:hover,
	{$rule}html .yith-quick-view.fade-in .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb:hover,
	{$rule}html .yith-quick-view.scale-in .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb:hover,
	{$rule}html .yith-quick-view.slide-in .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb.active,
	{$rule}html .yith-quick-view.fade-in .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb.active,
	{$rule}html .yith-quick-view.scale-in .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb.active,
	{$rule}.yith-quick-view.yith-inline .single-product .cmsmasters_product_info_wrap,
	{$rule}.yith-quick-view.yith-inline .single-product .product_meta,
	{$rule}.yith-quick-view.yith-inline .yith-wcqv-head #yith-quick-view-close,
	{$rule}.yith-quick-view.yith-inline .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb:hover,
	{$rule}.yith-quick-view.yith-inline .single-product > .product > .product > div.images .yith-quick-view-thumbs .yith-quick-view-single-thumb.active {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */
	
	
/***************** Finish {$title} Yith WooCommerce Quick View Colors Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('handmade_shop_theme_colors_secondary_filter', 'handmade_shop_yith_woocommerce_quick_view_colors');

