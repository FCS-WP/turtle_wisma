<?php
/**
 * @cmsmasters_package 	Handmade Shop
 * @cmsmasters_version 	1.1.4
 */


global $product; 

if ( ! is_a( $product, 'WC_Product' ) ) {
	return;
}

?>
<li>
	<?php do_action( 'woocommerce_widget_product_item_start', $args ); ?>

	<a href="<?php echo esc_url( $product->get_permalink() ); ?>">
		<?php echo handmade_shop_return_content( $product->get_image() ); ?>
		<span class="product-title"><?php echo wp_kses_post($product->get_name()); ?></span>
	</a>

	<?php if ( ! empty( $show_rating ) ) : ?>
	<?php handmade_shop_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full'); ?>
	<?php endif; ?>
	
	<?php echo handmade_shop_return_content( $product->get_price_html() ); ?>

	<?php do_action( 'woocommerce_widget_product_item_end', $args ); ?>
</li>