<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.1.7
 * 
 * Gutenberg Module Colors Rules
 * Created by CMSMasters
 * 
 */


function handmade_shop_gutenberg_module_colors($custom_css = '', $is_editor = false) {
	$cmsmasters_option = handmade_shop_get_global_options();
	
	$editor = ($is_editor ? '.editor-styles-wrapper' : '');
	
	$custom_css .= "
/***************** Start Gutenberg Module Custom Colors Scheme Rules ******************/
	
	{$editor} div.wp-block ul > li:before,
	{$editor} ul.wp-block li:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_default_border']) . "
	}
	
	{$editor} blockquote:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_default_alternate']) . "
	}
	
	{$editor} dt,
	{$editor} .wp-block-quote,
	.editor-styles-wrapper .wp-block-freeform blockquote,
	.editor-styles-wrapper .wp-block-freeform blockquote p,
	.editor-styles-wrapper .wp-caption,
	.editor-styles-wrapper .wp-caption a,
	.editor-styles-wrapper .wp-caption dd,
	.editor-styles-wrapper .wp-caption dd.wp-caption-dd {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_default_heading']) . "
	}
	
	{$editor} .wp-block-table thead th,
	{$editor} .wp-block-table thead td,
	{$editor} .wp-block-freeform.mce-content-body > table thead th,
	{$editor} .wp-block-freeform.mce-content-body > table thead td {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_default_link']) . "
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_default_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_default_bg']) . "
	}

/***************** Finish Gutenberg Module Custom Colors Scheme Rules ******************/





/***************** Start Gutenberg Module General Colors Scheme Rules ******************/
	/* Start Main Content Font Color */
	body .editor-styles-wrapper,
	.editor-styles-wrapper .wp-block select,
	.editor-styles-wrapper p.wp-block-subhead,
	.editor-styles-wrapper .wp-block-html .block-editor-plain-text,
	{$editor} .wp-block-image figcaption,
	{$editor} .wp-block-audio figcaption,
	{$editor} .wp-block-video figcaption,
	{$editor} .wp-caption dd,
	{$editor} .wp-block-latest-posts .wp-block-latest-posts__post-date,
	{$editor} .wp-block-latest-comments .wp-block-latest-comments__comment-date,
	{$editor} .wp-block-search .wp-block-search__input {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_default_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	.editor-styles-wrapper a,
	.editor-styles-wrapper .wp-block-freeform.block-library-rich-text__tinymce a,
	.editor-styles-wrapper .wp-block-file .wp-block-file__textlink,
	{$editor} .wp-block-search .wp-block-search__button:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_default_link']) . "
	}

	{$editor} .wp-block-search .wp-block-search__input:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_default_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	.editor-styles-wrapper a:hover,
	.editor-styles-wrapper a:active,
	body .editor-styles-wrapper h1 a:hover,
	body .editor-styles-wrapper h1 a:active,
	body .editor-styles-wrapper h2 a:hover,
	body .editor-styles-wrapper h2 a:active,
	body .editor-styles-wrapper h3 a:hover,
	body .editor-styles-wrapper h3 a:active,
	body .editor-styles-wrapper h4 a:hover,
	body .editor-styles-wrapper h4 a:active,
	body .editor-styles-wrapper h5 a:hover,
	body .editor-styles-wrapper h5 a:active,
	body .editor-styles-wrapper h6 a:hover,
	body .editor-styles-wrapper h6 a:active,
	.editor-styles-wrapper div.wp-block .wp-block-freeform.block-library-rich-text__tinymce a:hover,
	.editor-styles-wrapper div.wp-block .wp-block-freeform.block-library-rich-text__tinymce a:active,
	{$editor} .wp-block-search .wp-block-search__button {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_default_hover']) . "
	}
	
	.editor-styles-wrapper .wp-block select:focus {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_default_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	.editor-post-title__block .editor-post-title__input,
	body .editor-styles-wrapper h1,
	body .editor-styles-wrapper h1 a,
	body .editor-styles-wrapper h2,
	body .editor-styles-wrapper h2 a,
	body .editor-styles-wrapper h3,
	body .editor-styles-wrapper h3 a,
	body .editor-styles-wrapper h4,
	body .editor-styles-wrapper h4 a,
	body .editor-styles-wrapper h5,
	body .editor-styles-wrapper h5 a,
	body .editor-styles-wrapper h6,
	body .editor-styles-wrapper h6 a,
	{$editor} .wp-block-pullquote,
	{$editor} .wp-block-calendar thead th,
	.editor-styles-wrapper .wp-block-quote,
	.editor-styles-wrapper .wp-block-freeform blockquote,
	.editor-styles-wrapper .wp-block-freeform blockquote p,
	.editor-styles-wrapper q {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_default_heading']) . "
	}
	
	{$editor} .wp-block-pullquote.is-style-solid-color {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_default_heading']) . "
	}
	
	{$editor} .wp-block-pullquote {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_default_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$editor} .wp-block-pullquote.is-style-solid-color,
	{$editor} .wp-block-cover,
	{$editor} .wp-block-cover a,
	{$editor} .wp-block-cover a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_default_bg']) . "
	}
	
	body .editor-styles-wrapper,
	{$editor} .wp-block-search .wp-block-search__input {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_default_bg']) . "
	}
	/* Finish Main Background Color */

	/* Start Alternate Background Color */
	.editor-styles-wrapper .wp-block select {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_default_alternate']) . "
	}
	/* Finish Alternate Background Color */	
	
	/* Start Borders Color */
	{$editor} .wp-block-separator.is-style-dots:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_default_border']) . "
	}
	
	{$editor} .wp-block-separator:not(.is-style-dots):before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_default_border']) . "
	}
	
	.editor-styles-wrapper .wp-block select,
	.editor-styles-wrapper .wp-block-freeform hr,
	{$editor} .wp-block-search .wp-block-search__input {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_default_border']) . "
	}
	/* Finish Borders Color */
	
	
	/* Start Table Colors */
	{$editor} .wp-block-table th,
	{$editor} .wp-block-table td,
	{$editor} .wp-block-table.is-style-stripes th,
	{$editor} .wp-block-table.is-style-stripes td,
	.editor-styles-wrapper .wp-block-freeform .mce-item-table tbody tr th,
	.editor-styles-wrapper .wp-block-freeform .mce-item-table tbody tr td,
	.editor-styles-wrapper .wp-block-freeform table tbody tr th,
	.editor-styles-wrapper .wp-block-freeform table tbody tr td {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_default_border']) . "
	}
	
	{$editor} .wp-block-table.is-style-stripes tr:nth-child(odd) td {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_default_alternate']) . "
	}
	/* Finish Table Colors */
	
	
	/* Start Buttons Colors */
	{$editor} .wp-block-button .wp-block-button__link:not(.has-text-color):not(.has-background),
	{$editor} .wp-block-file .wp-block-file__button,
	{$editor} .wp-block-file a.wp-block-file__button {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_default_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_default_link']) . "
	}
	
	{$editor} .wp-block-button .wp-block-button__link:not(.has-text-color):not(.has-background):hover,
	{$editor} .wp-block-button .wp-block-button__link:not(.has-text-color):not(.has-background):focus,
	{$editor} .wp-block-button .wp-block-button__link:not(.has-text-color):not(.has-background):active,
	{$editor} .wp-block-file .wp-block-file__button:hover,
	{$editor} .wp-block-file .wp-block-file__button:focus,
	{$editor} .wp-block-file .wp-block-file__button:active,
	{$editor} .wp-block-file a.wp-block-file__button:hover,
	{$editor} .wp-block-file a.wp-block-file__button:focus,
	{$editor} .wp-block-file a.wp-block-file__button:active {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_default_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_default_hover']) . "
	}
	
	{$editor} .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):not(.has-background) {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_default_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_default_bg']) . "
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_default_link']) . "
	}
	
	{$editor} .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):not(.has-background):hover,
	{$editor} .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):not(.has-background):focus,
	{$editor} .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):not(.has-background):active {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_default_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_default_link']) . "
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_default_link']) . "
	}
	/* Finish Buttons Colors */
	

/***************** Finish Gutenberg Module General Colors Scheme Rules ******************/

";
	$custom_css .= handmade_shop_gutenberg_editor_color_palettes_styles( true );
	
	return $custom_css;
}

add_filter('handmade_shop_theme_colors_secondary_filter', 'handmade_shop_gutenberg_module_colors');

