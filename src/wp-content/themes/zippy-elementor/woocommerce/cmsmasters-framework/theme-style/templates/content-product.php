<?php
/**
 * @cmsmasters_package 	Handmade Shop
 * @cmsmasters_version 	1.3.4
 */


global $product;

// Check if the product is a valid WooCommerce product and ensure its visibility before proceeding.
if ( ! is_a( $product, WC_Product::class ) || ! $product->is_visible() ) {
	return;
}
if (defined('YITH_WCQV_PREMIUM')) {
	$position = get_option('yith-wcqv-button-position');
}

?>
<li <?php wc_product_class( '', $product ); ?>>
	<article class="cmsmasters_product">
		<?php
		/**
		 * Hook: woocommerce_before_shop_loop_item.
		 *
		 * @hooked woocommerce_template_loop_product_link_open - 10
		 */
		remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
		
		do_action( 'woocommerce_before_shop_loop_item' );
		?>
		<figure class="cmsmasters_product_img">
			<a href="<?php the_permalink(); ?>">
				<?php woocommerce_template_loop_product_thumbnail(); ?>
			</a>
			<?php 
				woocommerce_show_product_loop_sale_flash();
				
				$availability = $product->get_availability();

			if (isset($availability['class'])) {
				if (esc_attr($availability['class']) == 'out-of-stock') {
					echo apply_filters('woocommerce_stock_html', '<span class="' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</span>', $availability['availability']);
				}
			} else {
				// Handle the case when 'class' key is not defined
			}
				
				if (CMSMASTERS_WCQV || CMSMASTERS_WCWL) {
					echo '<div class="cmsmasters_product_but_wrap">';
					
					/* WooCommerce Quick View add to button */
					if (CMSMASTERS_WCQV) {
						if (defined('YITH_WCQV_PREMIUM')) { 
							if ($position == 'image') {
								handmade_shop_quick_view_button();
							}
						} else {
							handmade_shop_quick_view_button();
						}
					}
					
					/* WooCommerce Wishlist add to button */
					if (CMSMASTERS_WCWL) {
						handmade_shop_add_wishlist_button();
					}
					
					echo '</div>';
				}
			?>
		</figure>
		<div class="cmsmasters_product_inner">
			<?php
			/**
			 * Hook: woocommerce_before_shop_loop_item_title.
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
			remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
			
			if(CMSMASTERS_WCQV) {
				remove_action( 'woocommerce_before_shop_loop_item_title', array(YITH_WCQV_Frontend(), 'yith_add_quick_view_button' ), 15 );
			}
			
			do_action( 'woocommerce_before_shop_loop_item_title' );
			
			
			/**
			 * Hook: woocommerce_shop_loop_item_title.
			 *
			 * @hooked woocommerce_template_loop_product_title - 10
			 */
			remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
			
			do_action( 'woocommerce_shop_loop_item_title' );
			?>
			<header class="cmsmasters_product_header entry-header">
				<h2 class="cmsmasters_product_title entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
			</header>
			<?php 
			if (get_the_terms($product->get_id(), 'product_cat')) {
				echo '<div class="cmsmasters_product_cat entry-meta">' . 
					handmade_shop_get_the_category_list($product->get_id(), 'product_cat', ', ') . 
				'</div>';
			}
			?>
			<div class="cmsmasters_product_info_wrap">
				<div class="cmsmasters_product_info">
				<?php
					handmade_shop_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full');
					
					woocommerce_template_loop_price();
					
					
					/**
					 * Hook: woocommerce_after_shop_loop_item_title.
					 *
					 * @hooked woocommerce_template_loop_rating - 5
					 * @hooked woocommerce_template_loop_price - 10
					 */
					remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
					remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
					
					do_action( 'woocommerce_after_shop_loop_item_title' );
				?>
				</div>
				<div class="cmsmasters_product_add_wrap">
				<?php echo handmade_shop_woocommerce_add_to_cart_button('', true); ?>
				</div>
			</div>
			<?php
				// /* WooCommerce Quick View add to button */
				if (CMSMASTERS_WCQV && defined('YITH_WCQV_PREMIUM') && $position == 'add-cart') {
					handmade_shop_quick_view_button();
				}
			?>
		</div>
		<?php
		/**
		 * Hook: woocommerce_after_shop_loop_item.
		 *
		 * @hooked woocommerce_template_loop_product_link_close - 5
		 * @hooked woocommerce_template_loop_add_to_cart - 10
		 */
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
		
		if(CMSMASTERS_WCQV) {
			remove_action( 'woocommerce_after_shop_loop_item', array(YITH_WCQV_Frontend(), 'yith_add_quick_view_button' ), 15 );
		}
		
		do_action( 'woocommerce_after_shop_loop_item' );
		?>
	</article>
</li>