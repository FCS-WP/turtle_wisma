<?php
/**
 * @cmsmasters_package 	Handmade Shop
 * @cmsmasters_version 	1.1.3
 */


global $post, $product;

$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );

?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'handmade-shop' ); ?> <span class="sku"><?php 
			if ($sku = $product->get_sku()) {
				echo handmade_shop_return_content($sku);
			} else {
				echo esc_html__( 'N/A', 'handmade-shop' );
			}
		?></span></span>

	<?php endif; ?>

	<?php
	if (get_the_terms($product->get_id(), 'product_cat')) {
		echo '<span class="posted_in">' . 
			'<span class="cmsmasters_product_cat_title">' . esc_html(_n('Category:', 'Categories:', $cat_count, 'handmade-shop')) . '</span> ' . 
			handmade_shop_get_the_category_list($product->get_id(), 'product_cat', ', ') . 
		'</span>';
	}
	?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'handmade-shop' ) . ' ', '</span>' ); ?>
	
	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
