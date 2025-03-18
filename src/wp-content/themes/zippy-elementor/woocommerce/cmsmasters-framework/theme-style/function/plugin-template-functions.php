<?php 
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version		1.1.9
 * 
 * WooCommerce Template Functions
 * Created by CMSMasters
 * 
 */


/* Dynamic Cart */
function handmade_shop_mid_header_woocommerce_cart_dropdown($cmsmasters_option) {
	if (
		$cmsmasters_option['handmade-shop' . '_header_styles'] == 'default' &&
		isset($cmsmasters_option['handmade-shop' . '_woocommerce_cart_dropdown']) &&
		$cmsmasters_option['handmade-shop' . '_woocommerce_cart_dropdown']
	) {
		global $woocommerce;
		
		$cart_url = wc_get_cart_url();
		
		$cart_count = $woocommerce->cart->get_cart_contents_count();
		
		
		echo '<div class="cmsmasters_dynamic_cart_wrap">' . 
			'<div class="cmsmasters_dynamic_cart">' .  
				'<a href="' . esc_url($cart_url) . '" class="cmsmasters_dynamic_cart_button cmsmasters_theme_icon_basket"><span>' . esc_html($cart_count) . '</span></a>' . 
				'<span class="cmsmasters_dynamic_cart_button_hide"></span>' . 
				'<div class="widget_shopping_cart_content"></div>' . 
			'</div>' . 
		'</div>';
	}
}

add_action('cmsmasters_after_logo', 'handmade_shop_mid_header_woocommerce_cart_dropdown');


function handmade_shop_bot_header_woocommerce_cart_dropdown($cmsmasters_option) {
	if (
		$cmsmasters_option['handmade-shop' . '_header_styles'] != 'default' &&
		isset($cmsmasters_option['handmade-shop' . '_woocommerce_cart_dropdown']) &&
		$cmsmasters_option['handmade-shop' . '_woocommerce_cart_dropdown']
	) {
		global $woocommerce;
		
		$cart_url = wc_get_cart_url();
		
		$cart_count = $woocommerce->cart->get_cart_contents_count();
		
		
		echo '<div class="cmsmasters_dynamic_cart_wrap">' . 
			'<div class="cmsmasters_dynamic_cart">' .  
				'<a href="' . esc_url($cart_url) . '" class="cmsmasters_dynamic_cart_button cmsmasters_theme_icon_basket"><span>' . esc_html($cart_count) . '</span></a>' . 
				'<span class="cmsmasters_dynamic_cart_button_hide"></span>' . 
				'<div class="widget_shopping_cart_content"></div>' . 
			'</div>' . 
		'</div>';
	}
}

add_action('cmsmasters_after_header_bot', 'handmade_shop_bot_header_woocommerce_cart_dropdown');



/* Add to Cart Button */
function handmade_shop_woocommerce_add_to_cart_button($args = array(), $show = '') {
	global $product;
	
	if ( $product ) {
		$defaults = array(
			'quantity' => 1,
			'class'    => implode( ' ', array_filter( array(
					'product_button',
					'product_type_' . $product->get_type(),
					$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button cmsmasters_add_to_cart_button' : '',
					$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : ''
			) ) )
		);

		$args = apply_filters( 'woocommerce_loop_add_to_cart_args', wp_parse_args( $args, $defaults ), $product );
		
		extract($args);
		
		$out = sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s"><span>%s</span></a>',
			esc_url( $product->add_to_cart_url() ),
			esc_attr( isset( $quantity ) ? $quantity : 1 ),
			esc_attr( $product->get_id() ),
			esc_attr( $product->get_sku() ),
			esc_attr( isset( $class ) ? $class : 'button' ),
			esc_html( $product->add_to_cart_text() )
		);
	}
	
	
	if ($show) {
		echo handmade_shop_return_content($out);
	} else {
		return $out;
	}
}


/* Rating */
function handmade_shop_woocommerce_rating($icon_trans = '', $icon_color = '', $in_review = false, $comment_id = '', $show = true) {
	global $product;
	
	
	if (get_option( 'woocommerce_enable_review_rating') === 'no') {
		return;
	}
	
	
	$rating = (($in_review) ? intval(get_comment_meta($comment_id, 'rating', true)) : ($product->get_average_rating() ? $product->get_average_rating() : '0'));
	
	$itemtype = $in_review ? 'Rating' : 'AggregateRating';
	
	
	$out = "
<div class=\"cmsmasters_star_rating\" itemscope itemtype=\"//schema.org/{$itemtype}\" title=\"" . sprintf(esc_html__('Rated %s out of 5', 'handmade-shop'), $rating) . "\">
<div class=\"cmsmasters_star_trans_wrap\">
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
	<span class=\"{$icon_trans} cmsmasters_star\"></span>
</div>
<div class=\"cmsmasters_star_color_wrap\" data-width=\"width:" . (($rating / 5) * 100) . "%\">
	<div class=\"cmsmasters_star_color_inner\">
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
		<span class=\"{$icon_color} cmsmasters_star\"></span>
	</div>
</div>
<span class=\"rating dn\"><strong itemprop=\"ratingValue\">" . esc_html($rating) . "</strong> " . esc_html__('out of 5', 'handmade-shop') . "</span>
</div>
";
	
	
	if ($show) {
		echo handmade_shop_return_content($out);
	} else {
		return $out;
	}
}


/* Price Format */
function handmade_shop_woocommerce_price_format($format, $currency_pos) {
	$format = '%2$s<span>%1$s</span>';

	switch ( $currency_pos ) {
		case 'left' :
			$format = '<span>%1$s</span>%2$s';
		break;
		case 'right' :
			$format = '%2$s<span>%1$s</span>';
		break;
		case 'left_space' :
			$format = '<span>%1$s&nbsp;</span>%2$s';
		break;
		case 'right_space' :
			$format = '%2$s<span>&nbsp;%1$s</span>';
		break;
	}
	
	return $format;
}
 
add_action('woocommerce_price_format', 'handmade_shop_woocommerce_price_format', 1, 2);


/* WooCommerce Dynamic cart count update after ajax */
function woocommerce_header_add_to_cart_count( $dynamic_count ) {
	global $woocommerce;
	
	ob_start();
	
	?>
	<span><?php echo esc_html($woocommerce->cart->cart_contents_count); ?></span>
	<?php
	
	$dynamic_count['.cmsmasters_dynamic_cart_button span'] = ob_get_clean();
	
	return $dynamic_count;
}

add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_count');
