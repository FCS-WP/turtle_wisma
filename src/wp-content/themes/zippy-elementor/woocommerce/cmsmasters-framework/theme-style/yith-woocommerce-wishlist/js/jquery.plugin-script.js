/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.3.1
 * 
 * Yith WooCommerce Wishlist Scripts
 * Created by CMSMasters
 * 
 */


"use strict";

jQuery(document).ready(function () { 
	cmsmasters_ajax_wishlist_add_to_cart();
} );


function cmsmasters_ajax_wishlist_add_to_cart() {
	"use strict";
	
	jQuery( '.cmsmasters_product' ).on( 'click', '.cmsmasters_add_wishlist_button', function() {
		var $this = jQuery( this ),
			product_id = $this
				.find( '.add_to_wishlist' )
				.attr( 'data-product-id' ),
			filtered_data = null,
			data = {
				action: yith_wcwl_l10n.actions.add_to_wishlist_action,
				nonce: yith_wcwl_l10n.nonce.add_to_wishlist_nonce,
				context: 'frontend',
				add_to_wishlist: product_id,
				product_type: $this.data( 'product-type' ),
				wishlist_id: $this.data( 'wishlist-id' ),
			};

		// allow third party code to filter data
		if( filtered_data = jQuery(document).triggerHandler( 'yith_wcwl_add_to_wishlist_data', [ $this, data ] ) ) {
			data = filtered_data;
		}

		jQuery.ajax({
			type: 'POST',
			url: yith_wcwl_l10n.ajax_url,
			data: data,
			dataType: 'json',
			success: function( response ) {
				$this.closest( '.cmsmasters_product_but_wrap' )
					.find( '.yith-wcwl-wishlistaddedbrowse' )
					.removeClass( 'hide' )
					.css( 'display', 'block' );
			}

		} );
	} );
	
	jQuery('.wishlist_table').on( 'click', '.add_to_cart_button', function() {
		console.log();
		
		var productInfo = jQuery(this).closest('tr'), 
			productAmount = productInfo.find('.product-price > .amount, .product-price > ins > .amount').text(), 
			addedToCart = productInfo.find('.added_to_cart'), 
			product = {};
		
		
		product.name = productInfo.find('.product-name a').text();
		
		product.price = productAmount.replace(cmsmasters_woo_script.currency_symbol, '');
		
		product.image = productInfo.find('.product-thumbnail img');
		
		
		addedToCart.addClass('cmsmasters_to_show');
		
		
		if (product.image.length) {
			/* Dynamic Cart Update Img Src */
			var str = product.image.get(0).src, 
				ext = /(\..{3,4})$/i.exec(str), 
				extLength = ext[1].length, 
				url = str.slice(0, -extLength), 
				newURL = /(-\d{2,}x\d{2,})$/i.exec(url), 
				newSize = '-' + cmsmasters_woo_script.thumbnail_image_width + 'x' + cmsmasters_woo_script.thumbnail_image_height, 
				buildURL = '';
			
			
			if (newURL !== null) {
				buildURL += url.slice(0, -newURL[1].length) + newSize + ext[1];
			} else {
				buildURL += url + newSize + ext[1];
			}
			
			
			product.image = '<img class="cmsmasters_added_product_info_img" src="' + buildURL + '" />';
		}
		
		
		cmsmasters_added_product = product;
	} );
}
