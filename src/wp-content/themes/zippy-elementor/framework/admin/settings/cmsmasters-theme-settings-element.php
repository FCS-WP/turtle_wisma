<?php 
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.2.8
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function handmade_shop_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'handmade-shop');
	
	if (class_exists('Cmsmasters_Content_Composer')) {
		$tabs['icon'] = esc_attr__('Social Icons', 'handmade-shop');
	}
	
	$tabs['lightbox'] = esc_attr__('Lightbox', 'handmade-shop');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'handmade-shop');
	$tabs['error'] = esc_attr__('404', 'handmade-shop');
	$tabs['code'] = esc_attr__('Custom Codes', 'handmade-shop');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'handmade-shop');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function handmade_shop_options_element_sections() {
	$tab = handmade_shop_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'handmade-shop');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'handmade-shop');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'handmade-shop');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'handmade-shop');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'handmade-shop');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'handmade-shop');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'handmade-shop');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function handmade_shop_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = handmade_shop_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = handmade_shop_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'handmade-shop' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['handmade-shop' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'handmade-shop' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['handmade-shop' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'handmade-shop') . '|dark', 
				esc_html__('Light', 'handmade-shop') . '|light', 
				esc_html__('Mac', 'handmade-shop') . '|mac', 
				esc_html__('Metro Black', 'handmade-shop') . '|metro-black', 
				esc_html__('Metro White', 'handmade-shop') . '|metro-white', 
				esc_html__('Parade', 'handmade-shop') . '|parade', 
				esc_html__('Smooth', 'handmade-shop') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'handmade-shop'), 
			'desc' => esc_html__('Sets path for switching windows', 'handmade-shop'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'handmade-shop') . '|vertical', 
				esc_html__('Horizontal', 'handmade-shop') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'handmade-shop'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'handmade-shop'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'handmade-shop'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'handmade-shop'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'handmade-shop'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'handmade-shop'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'handmade-shop'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'handmade-shop'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'handmade-shop'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'handmade-shop'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'handmade-shop'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'handmade-shop'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'handmade-shop') . '|center', 
				esc_html__('Fit', 'handmade-shop') . '|fit', 
				esc_html__('Fill', 'handmade-shop') . '|fill', 
				esc_html__('Stretch', 'handmade-shop') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'handmade-shop'), 
			'desc' => esc_html__('Sets buttons be available or not', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'handmade-shop'), 
			'desc' => esc_html__('Enable the arrow buttons', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'handmade-shop'), 
			'desc' => esc_html__('Sets the fullscreen button', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'handmade-shop'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'handmade-shop'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'handmade-shop'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'handmade-shop'), 
			'desc' => esc_html__('Sets the swipe navigation', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'handmade-shop' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'handmade-shop'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'handmade-shop' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'handmade-shop' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'handmade-shop' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'handmade-shop' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'handmade-shop' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'handmade-shop' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'handmade-shop' . '_error_color', 
			'title' => esc_html__('Text Color', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['handmade-shop' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'handmade-shop' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['handmade-shop' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'handmade-shop' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'handmade-shop' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'handmade-shop'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'handmade-shop'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['handmade-shop' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'handmade-shop' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['handmade-shop' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'handmade-shop') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'handmade-shop') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'handmade-shop') . '|repeat-y', 
				esc_html__('Repeat', 'handmade-shop') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'handmade-shop' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['handmade-shop' . '_error_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'handmade-shop') . '|top left', 
				esc_html__('Top Center', 'handmade-shop') . '|top center', 
				esc_html__('Top Right', 'handmade-shop') . '|top right', 
				esc_html__('Center Left', 'handmade-shop') . '|center left', 
				esc_html__('Center Center', 'handmade-shop') . '|center center', 
				esc_html__('Center Right', 'handmade-shop') . '|center right', 
				esc_html__('Bottom Left', 'handmade-shop') . '|bottom left', 
				esc_html__('Bottom Center', 'handmade-shop') . '|bottom center', 
				esc_html__('Bottom Right', 'handmade-shop') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'handmade-shop' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['handmade-shop' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'handmade-shop') . '|scroll', 
				esc_html__('Fixed', 'handmade-shop') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'handmade-shop' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['handmade-shop' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'handmade-shop') . '|auto', 
				esc_html__('Cover', 'handmade-shop') . '|cover', 
				esc_html__('Contain', 'handmade-shop') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'handmade-shop' . '_error_search', 
			'title' => esc_html__('Search Line', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'handmade-shop' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'handmade-shop' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['handmade-shop' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'handmade-shop' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['handmade-shop' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'handmade-shop' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['handmade-shop' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'handmade-shop' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['handmade-shop' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'handmade-shop' . '_twitter_access_data', 
			'title' => esc_html__('Twitter Access Data', 'handmade-shop'), 
			'desc' => sprintf(
				/* translators: Twitter access data. %s: Link to twitter access data generator */
				esc_html__( 'Generate %s and paste access data to fields.', 'handmade-shop' ),
				'<a href="' . esc_url( 'https://api.cmsmasters.net/wp-json/cmsmasters-api/v1/twitter-request-token' ) . '" target="_blank">' .
					esc_html__( 'twitter access data', 'handmade-shop' ) .
				'</a>'
			), 
			'type' => 'multi-text', 
			'std' => $defaults[$tab]['handmade-shop' . '_twitter_access_data'], 
			'class' => 'regular-text', 
			'choices' => array( 
				esc_html__('Consumer Key', 'handmade-shop') . '|consumer_key', 
				esc_html__('Consumer Secret', 'handmade-shop') . '|consumer_secret', 
				esc_html__('Access Token', 'handmade-shop') . '|access_token', 
				esc_html__('Access Token Secret', 'handmade-shop') . '|access_token_secret' 
			) 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'handmade-shop' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['handmade-shop' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'handmade-shop' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['handmade-shop' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

