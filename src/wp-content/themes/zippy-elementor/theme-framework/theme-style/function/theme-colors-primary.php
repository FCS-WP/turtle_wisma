<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.1.5
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function handmade_shop_theme_colors_primary() {
	$cmsmasters_option = handmade_shop_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.1.3
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}.cmsmasters_likes a span, 
	{$rule}.cmsmasters_comments a span,
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_title:before,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat.stat_has_titleicon .cmsmasters_stat_inner:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}a,
	{$rule}.color_2,
	{$rule}.cmsmasters_icon_wrap a .cmsmasters_simple_icon,
	{$rule}.error .error_title,
	{$rule}.widget_custom_twitter_entries .tweet_time:before,
	{$rule}.widget_pages li.current_page_item > a,
	{$rule}.widget_nav_menu li.current_page_item > a,
	{$rule}.cmsmasters_pricing_table .pricing_best .pricing_title,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon_wrap, 
	{$rule}.cmsmasters_counters.counters_type_horizontal .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before, 
	{$rule}.cmsmasters_wrap_more_items.cmsmasters_loading:before,
	{$rule}.cmsmasters_header_search_form button:hover, 
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_heading_left .icon_box_heading:before,
	{$rule}.bypostauthor > .comment-body .alignleft:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a:hover,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover,
	{$rule}.cmsmasters_post_timeline:hover .cmsmasters_post_date .cmsmasters_day,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_category a,
	{$rule}.cmsmasters_slider_project_category a,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_placeholder:before,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_title,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_title,
	{$rule}.search_bar_wrap .search_button button:hover,
	{$rule}.cmsmasters_toggles.toggles_mode_toggle .cmsmasters_toggle_title a:hover,
	{$rule}.cmsmasters_toggles.toggles_mode_toggle .current_toggle .cmsmasters_toggle_title a,
	{$rule}.cmsmasters_toggles .current_toggle .cmsmasters_toggle_title a,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_title:hover a,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_plus,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap .cmsmasters_toggle_title:hover .cmsmasters_toggle_plus,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item a:hover:before,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item.current_tab a:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	" . (($scheme == 'default') ? "mark," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme} mark," : '') . "
	{$rule}table thead tr th,
	{$rule}table thead tr td,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:after, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:after, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:after, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:after, 
	{$rule}.cmsmasters_button, 
	{$rule}.button, 
	{$rule}input[type=submit], 
	{$rule}input[type=button], 
	{$rule}button,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_project_category a, 
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_project_category a,
	{$rule}.cmsmasters_pricing_table .pricing_best .cmsmasters_pricing_item_header,
	{$rule}.cmsmasters_pricing_table .pricing_title,
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_inner,
	{$rule}.cmsmasters_notice .notice_close:hover,
	{$rule}.cmsmasters_quotes_slider .owl-pagination .owl-page.active,
	{$rule}.cmsmasters_quotes_slider .owl-pagination .owl-page:hover,
	{$rule}.cmsmasters_posts_slider .owl-pagination .owl-page.active,
	{$rule}.cmsmasters_posts_slider .owl-pagination .owl-page:hover,
	{$rule}.cmsmasters_clients_slider .owl-pagination .owl-page.active,
	{$rule}.cmsmasters_clients_slider .owl-pagination .owl-page:hover,
	{$rule}.cmsmasters_project_grid .cmsmasters_project_category a,
	{$rule}.owl-pagination .owl-page:hover,
	{$rule}.owl-pagination .owl-page.active,
	{$rule}.cmsmasters_project_puzzle .project_inner,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_category a:hover,
	{$rule}.cmsmasters_slider_post_category a,
	{$rule}.cmsmasters_slider_project_category a:hover,
	{$rule}.cmsmasters_post_category a {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}table thead tr th,
	{$rule}table thead tr td,
	{$rule}.cmsmasters_pricing_table .pricing_best .cmsmasters_pricing_item_header,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:after, 
	{$rule}.cmsmasters_button, 
	{$rule}.button, 
	{$rule}input[type=submit], 
	{$rule}input[type=button], 
	{$rule}button,
	{$rule}.widget_pages li.current_page_item > a,
	{$rule}.widget_nav_menu li.current_page_item > a,
	{$rule}.cmsmasters_notice .notice_close:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_header_search_form {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . ", 0.95);
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}a:hover,
	{$rule}h1 a:hover,
	{$rule}h2 a:hover,
	{$rule}h3 a:hover,
	{$rule}h4 a:hover,
	{$rule}h5 a:hover,
	{$rule}h6 a:hover,
	{$rule}.cmsmasters_icon_wrap a:hover .cmsmasters_simple_icon,
	{$rule}.cmsmasters_archive_read_more:hover,
	{$rule}.cmsmasters_latest_posts_list .cmsmasters_latest_posts_cont a:hover,
	{$rule}a.cmsmasters_cat_color:hover,
	{$rule}.widget_recent_entries a:hover,
	{$rule}.widget_rss ul li .rsswidget:hover,
	{$rule}.widget_categories li a:hover, 
	{$rule}.widget_archive li a:hover, 
	{$rule}.widget_meta li a:hover,
	{$rule}.widget_pages li a:hover,
	{$rule}.widget_nav_menu li a:hover,
	{$rule}.cmsmasters_likes a:hover:before,
	{$rule}.cmsmasters_likes a.active:before,
	{$rule}.cmsmasters_comments a:hover:before,
	{$rule}.cmsmasters_header_search_form button, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a:hover, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li.current a,
	{$rule}.cmsmasters_wrap_pagination ul li a.page-numbers:hover,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.current,
	{$rule}.cmsmasters_wrap_items_loader .cmsmasters_items_loader:hover,
	{$rule}.search_bar_wrap .search_button button,
	{$rule}.post_nav > span .post_nav_sub,
	{$rule}.post_nav > span:hover a,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_list:after, 
	{$rule}.cmsmasters_prev_arrow:hover, 
	{$rule}.cmsmasters_next_arrow:hover,
	{$rule}.cmsmasters_project_read_more:hover,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_read_more:hover,
	{$rule}.cmsmasters_open_profile .profile_details_item_desc a:hover, 
	{$rule}.cmsmasters_open_profile .profile_features_item_desc a:hover,
	{$rule}.cmsmasters_open_project .project_details_item_desc a:hover, 
	{$rule}.cmsmasters_open_project .project_features_item_desc a:hover,
	{$rule}.cmsmasters_open_post .cmsmasters_post_tags a:hover,
	{$rule}.cmsmasters_post_timeline:hover .cmsmasters_mon,
	{$rule}.cmsmasters_post_timeline:hover .cmsmasters_year,
	{$rule}.cmsmasters_post_default .cmsmasters_post_read_more:hover,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_read_more:hover,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_read_more:hover,
	{$rule}.cmsmasters_clients_slider .owl-prev:hover .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_clients_slider .owl-next:hover .cmsmasters_next_arrow,
	{$rule}.post_nav .cmsmasters_prev_post:hover .cmsmasters_prev_arrow,
	{$rule}.post_nav .cmsmasters_next_post:hover .cmsmasters_next_arrow,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_latest .cmsmasters_lpr_tabs_cont a:hover,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_popular .cmsmasters_lpr_tabs_cont a:hover,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item:before,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_wrap .cmsmasters_toggle_plus,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item a, 
	{$rule}.subpage_nav > span {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_hover']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}.share_posts a:hover,
	{$rule}.widget_tag_cloud a:hover,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_project_category a:hover, 
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_project_category a:hover,
	{$rule}.cmsmasters_slider_post_category a:hover,
	{$rule}.cmsmasters_project_grid .cmsmasters_project_category a:hover,
	{$rule}.cmsmasters_post_category a:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]):focus,
	{$rule}select:focus,
	{$rule}textarea:focus,
	{$rule}.share_posts a:hover,
	{$rule}.widget_tag_cloud a:hover,
	{$rule}.widget_pages li a:hover,
	{$rule}.widget_nav_menu li a:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}table tfoot tr th,
	{$rule}table tfoot tr td,
	{$rule}fieldset legend,
	{$rule}blockquote footer,
	{$rule}table caption,
	{$rule}.img_placeholder_small, 
	{$rule}.widget_rss ul li .rsswidget,
	{$rule}.widget_recent_entries a,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_title,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_title_counter_wrap, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li a:before,
	{$rule}.wp-caption-text,
	{$rule}.cmsmasters_img_caption,
	{$rule}.cmsmasters_dropcap,
	{$rule}blockquote,
	{$rule}q,
	{$rule}.widget_custom_twitter_entries .tweet_time,
	{$rule}.widget_tag_cloud a,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_latest .cmsmasters_lpr_tabs_cont a,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_popular .cmsmasters_lpr_tabs_cont a,
	{$rule}.widget_custom_contact_info_entries .contact_info_item_title,
	{$rule}#wp-calendar thead th,
	{$rule}.widget_categories li a, 
	{$rule}.widget_archive li a, 
	{$rule}.widget_meta li a,
	{$rule}.widget_pages li a,
	{$rule}.widget_nav_menu li a,
	{$rule}.cmsmasters-form-builder .form_info > label,
	{$rule}dt,
	{$rule}.cmsmasters_button:hover, 
	{$rule}.button:hover, 
	{$rule}input[type=submit]:hover, 
	{$rule}input[type=button]:hover, 
	{$rule}button:hover,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info,
	{$rule}.cmsmasters_archive_read_more,
	{$rule}.cmsmasters_latest_posts_list .cmsmasters_latest_posts_cont a,
	{$rule}.cmsmasters_open_post .cmsmasters_post_tags a,
	{$rule}.cmsmasters_post_default .cmsmasters_post_read_more,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_read_more,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_read_more,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers,
	{$rule}.cmsmasters_wrap_items_loader .cmsmasters_items_loader,
	{$rule}.cmsmasters_post_default .cmsmasters_post_cont_info,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_cont_info,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_cont_info,
	{$rule}.cmsmasters_open_post .cmsmasters_post_cont_info,
	{$rule}.cmsmasters_open_profile .profile_details_item_title, 
	{$rule}.cmsmasters_open_profile .profile_features_item_title,
	{$rule}.cmsmasters_open_project .project_details_item_title, 
	{$rule}.cmsmasters_open_project .project_features_item_title,
	{$rule}.cmsmasters_open_project .project_details_item_desc a, 
	{$rule}.cmsmasters_open_project .project_features_item_desc a,
	{$rule}.cmsmasters_open_profile .profile_details_item_desc a, 
	{$rule}.cmsmasters_open_profile .profile_features_item_desc a,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before, 
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before, 
	{$rule}.share_posts a,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_content,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_content,
	{$rule}.cmsmasters_pricing_table .cmsmasters_currency,
	{$rule}.cmsmasters_pricing_table .cmsmasters_price, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_coins,
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_prev_arrow, 
	{$rule}.cmsmasters_next_arrow,
	{$rule}.cmsmasters_project_read_more,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_cont_info,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_read_more,
	{$rule}.post_nav .cmsmasters_prev_post .cmsmasters_prev_arrow,
	{$rule}.post_nav .cmsmasters_next_post .cmsmasters_next_arrow,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_day,
	{$rule}.post_nav > span:hover .post_nav_sub,
	{$rule}.post_nav > span a,
	{$rule}.cmsmasters_toggles.toggles_mode_toggle .cmsmasters_toggle_title a,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_title a,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item a:hover,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item.current_tab a {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div:hover:after, 
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div:hover:before,
	{$rule}form .formError .formErrorContent {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}table thead tr th,
	{$rule}table thead tr td,
	{$rule}mark,
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_button, 
	{$rule}.button, 
	{$rule}input[type=submit], 
	{$rule}input[type=button], 
	{$rule}button,
	{$rule}.widget_tag_cloud a:hover,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_project_category a, 
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_project_category a,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon_wrap, 
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before, 
	{$rule}.cmsmasters_slider_project_header .cmsmasters_slider_project_title a,
	{$rule}.cmsmasters_slider_project_header .cmsmasters_slider_project_title a:hover,
	{$rule}.cmsmasters_project_grid .cmsmasters_project_category a,
	{$rule}.cmsmasters_post_category a,
	{$rule}.cmsmasters_post_category a:hover,
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_close,
	{$rule}.cmsmasters_header_search_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]), 
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_category a:hover,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_title a,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_likes a span,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_comments a span,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_likes a:before,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_comments a:before,
	{$rule}.cmsmasters_slider_post_category a,
	{$rule}.cmsmasters_slider_post_category a:hover,
	{$rule}.cmsmasters_slider_project_category a:hover,
	{$rule}.cmsmasters_slider_project .cmsmasters_likes a span,
	{$rule}.cmsmasters_slider_project .cmsmasters_comments a span,
	{$rule}.cmsmasters_slider_project .cmsmasters_likes a:before,
	{$rule}.cmsmasters_slider_project .cmsmasters_comments a:before,
	{$rule}.cmsmasters_notice .notice_close:hover,
	{$rule}.cmsmasters_pricing_table .pricing_title,
	{$rule}.cmsmasters_pricing_table .pricing_best .cmsmasters_pricing_item_header,
	{$rule}.cmsmasters_pricing_table .pricing_best .cmsmasters_currency, 
	{$rule}.cmsmasters_pricing_table .pricing_best .cmsmasters_price, 
	{$rule}.cmsmasters_pricing_table .pricing_best .cmsmasters_coins,
	{$rule}.share_posts a:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	" . (($scheme == 'default') ? ".middle_inner," : '') . "
	{$rule}.headline_outer,
	{$rule}table,
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}option,
	{$rule}select,
	{$rule}fieldset,
	{$rule}fieldset legend,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}.widget,
	{$rule}.widget_tag_cloud a,
	{$rule}.gallery-item .gallery-icon,
	{$rule}.gallery-item .gallery-caption,
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.cmsmasters_button:hover, 
	{$rule}.button:hover, 
	{$rule}input[type=submit]:hover, 
	{$rule}input[type=button]:hover, 
	{$rule}button:hover,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_list:after, 
	{$rule}.cmsmasters_post_default .cmsmasters_media_wrap,
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_close:after,
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_close:before,
	{$rule}.share_posts a,
	{$rule}.about_author_inner,
	{$rule}.cmsmasters_prev_arrow, 
	{$rule}.cmsmasters_next_arrow,
	{$rule}.commentlist > .comment,
	{$rule}.owl-pagination .owl-page,
	{$rule}.cmsmasters_open_post,
	{$rule}.cmsmasters_open_project, 
	{$rule}.cmsmasters_open_profile, 
	{$rule}.cmsmasters_project_grid .project_outer,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_cont,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_cont,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_date,
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_item_outer,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_category a,
	{$rule}.cmsmasters_clients_slider .owl-prev:hover .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_clients_slider .owl-next:hover .cmsmasters_next_arrow,
	{$rule}.post_nav .cmsmasters_prev_post:hover .cmsmasters_prev_arrow,
	{$rule}.post_nav .cmsmasters_next_post:hover .cmsmasters_next_arrow,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_outer,
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_toggles.toggles_mode_toggle .cmsmasters_toggle_title a,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item_inner,
	{$rule}.cmsmasters_pricing_table .pricing_best .pricing_title,
	{$rule}.cmsmasters_slider_project_category a,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_slider_project_category a,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_category a {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}blockquote:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.widget.widget_wysija,
	{$rule}.cmsmasters_icon_list_items .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_container,
	{$rule}.img_placeholder_small, 
	{$rule}.img_placeholder, 
	{$rule}.cmsmasters_featured_block,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_clients_slider .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_clients_slider .cmsmasters_next_arrow,
	{$rule}.post_nav .cmsmasters_prev_post .cmsmasters_prev_arrow,
	{$rule}.post_nav .cmsmasters_next_post .cmsmasters_next_arrow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}.cmsmasters_clients_slider .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_clients_slider .cmsmasters_next_arrow,
	{$rule}.post_nav .cmsmasters_prev_post .cmsmasters_prev_arrow,
	{$rule}.post_nav .cmsmasters_next_post .cmsmasters_next_arrow {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_likes a:before,
	{$rule}.cmsmasters_comments a:before,
	{$rule}ul li:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.widget .widgettitle:before, 
	{$rule}.widget .widgettitle:after, 
	{$rule}.quote_two.cmsmasters_quotes_grid .cmsmasters_quotes_vert span, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_list:before, 
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div:after, 
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div:before,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap:before,
	{$rule}.cmsmasters_open_profile .cmsmasters_profile_header .cmsmasters_profile_title:before,
	{$rule}.cmsmasters_open_profile .cmsmasters_profile_header .cmsmasters_profile_title:after,
	{$rule}.cmsmasters_profile_vertical .cmsmasters_profile_header:before,
	{$rule}.cmsmasters_profile_vertical .cmsmasters_profile_header:after,
	{$rule}.cmsmasters_profile_vertical .profile_social_icons_list:before,
	{$rule}.cmsmasters_profile_vertical .profile_social_icons_list:after,
	{$rule}.blog.timeline:before,
	{$rule}.cmsmasters_quotes_slider .owl-pagination .owl-page,
	{$rule}.cmsmasters_posts_slider .owl-pagination .owl-page,
	{$rule}.cmsmasters_clients_slider .owl-pagination .owl-page,
	{$rule}.cmsmasters_wrap_pagination ul:before,
	{$rule}.cmsmasters_wrap_pagination ul:after,
	{$rule}.cmsmasters_wrap_items_loader:before,
	{$rule}.cmsmasters_wrap_items_loader:after,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_border']) . "
	}
	
	" . (($scheme == 'footer') ? ".cmsmasters_footer_small," : '') . "
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_info, 
	{$rule}input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}hr,
	{$rule}table tr th,
	{$rule}table tr td,
	{$rule}.cmsmasters_divider,
	{$rule}.cmsmasters_widget_divider,
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list_item,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_inner,
	{$rule}.cmsmasters_icon_wrap .cmsmasters_simple_icon, 
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:after, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}.widget_custom_contact_info_entries .contact_info_item, 
	{$rule}.widget_custom_twitter_entries ul li, 
	{$rule}.widget,
	{$rule}.widget_tag_cloud a,
	{$rule}.widget_categories li, 
	{$rule}.widget_archive li, 
	{$rule}.widget_meta li,
	{$rule}.widget_pages li a,
	{$rule}.widget_nav_menu li a,
	{$rule}.cmsmasters_post_default .cmsmasters_media_wrap,
	{$rule}.cmsmasters_button:hover, 
	{$rule}.button:hover, 
	{$rule}input[type=submit]:hover, 
	{$rule}input[type=button]:hover, 
	{$rule}button:hover,
	{$rule}.share_posts a,
	{$rule}.about_author_inner,
	{$rule}.cmsmasters_pings_list .pingslist .pingback,
	{$rule}.commentlist > .comment,
	{$rule}.commentlist .children .comment,
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item_header,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item_inner,
	{$rule}.cmsmasters_open_post,
	{$rule}.cmsmasters_open_project, 
	{$rule}.cmsmasters_open_profile, 
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_list:after, 
	{$rule}.cmsmasters_open_profile .profile_details_item, 
	{$rule}.cmsmasters_open_profile .profile_features_item,
	{$rule}.cmsmasters_open_project .project_details_item, 
	{$rule}.cmsmasters_open_project .project_features_item,
	{$rule}.cmsmasters_project_grid .project_outer,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_cont,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_cont,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_outer,
	{$rule}.cmsmasters_single_slider .cmsmasters_single_slider_item_outer,
	{$rule}.cmsmasters_clients_slider .owl-prev:hover .cmsmasters_prev_arrow,
	{$rule}.cmsmasters_clients_slider .owl-next:hover .cmsmasters_next_arrow,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_title a,
	{$rule}.cmsmasters_toggles.toggles_mode_toggle .cmsmasters_toggle_title a,
	{$rule}.cmsmasters_toggles.toggles_mode_toggle .cmsmasters_toggle,
	{$rule}.cmsmasters_toggles.toggles_mode_accordion .cmsmasters_toggle_inner,
	{$rule}.post_nav .cmsmasters_prev_post:hover .cmsmasters_prev_arrow,
	{$rule}.post_nav .cmsmasters_next_post:hover .cmsmasters_next_arrow {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_border']) . "
	}

	{$rule} .mailpoet_submit:hover {
		border-color:rgb(" . cmsmasters_color2rgb($cmsmasters_option['handmade-shop' . '_' . $scheme . '_border']) . ") !important;
	}
	/* Finish Borders Color */
	
	
	/* Start Custom Rules */
	{$rule}::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	";
	
	
	if ($scheme != 'default') {
		$custom_css .= "
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_top_zigzag:before, 
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_bot_zigzag:after {
			background-image: -webkit-linear-gradient(135deg, " . $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-webkit-linear-gradient(45deg, " . $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -moz-linear-gradient(135deg, " . $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-moz-linear-gradient(45deg, " . $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -ms-linear-gradient(135deg, " . $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-ms-linear-gradient(45deg, " . $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -o-linear-gradient(135deg, " . $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-o-linear-gradient(45deg, " . $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: linear-gradient(315deg, " . $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					linear-gradient(45deg, " . $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
		}
		";
	}
	
	
	$custom_css .= "
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start {$title} Button Color Scheme Rules ******************/
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_bd_underline {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bd_underline:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, 
	{$rule}.cmsmasters_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:after {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['handmade-shop' . '_' . $scheme . '_bg']) . "
	}

/***************** Finish {$title} Button Color Scheme Rules ******************/


";
	}
	
	
	return apply_filters('handmade_shop_theme_colors_primary_filter', $custom_css);
}

