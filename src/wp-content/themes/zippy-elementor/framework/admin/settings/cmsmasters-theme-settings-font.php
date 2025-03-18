<?php 
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version		1.1.3
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function handmade_shop_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'handmade-shop');
	$tabs['link'] = esc_attr__('Links', 'handmade-shop');
	$tabs['nav'] = esc_attr__('Navigation', 'handmade-shop');
	$tabs['heading'] = esc_attr__('Heading', 'handmade-shop');
	$tabs['other'] = esc_attr__('Other', 'handmade-shop');
	$tabs['google'] = esc_attr__('Google Fonts', 'handmade-shop');
	
	return apply_filters('cmsmasters_options_font_tabs_filter', $tabs);
}


function handmade_shop_options_font_sections() {
	$tab = handmade_shop_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'handmade-shop');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'handmade-shop');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'handmade-shop');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'handmade-shop');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'handmade-shop');
		
		break;
	case 'google':
		$sections = array();
		
		$sections['google_section'] = esc_html__('Serving Google Fonts from CDN', 'handmade-shop');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_sections_filter', $sections, $tab);
} 


function handmade_shop_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = handmade_shop_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = handmade_shop_settings_font_defaults();
	
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'handmade-shop' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['handmade-shop' . '_content_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'handmade-shop' . '_link_font', 
			'title' => esc_html__('Links Font', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['handmade-shop' . '_link_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'handmade-shop' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['handmade-shop' . '_link_hover_decoration'], 
			'choices' => handmade_shop_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'handmade-shop' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['handmade-shop' . '_nav_title_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'handmade-shop' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['handmade-shop' . '_nav_dropdown_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'handmade-shop' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['handmade-shop' . '_h1_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'handmade-shop' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['handmade-shop' . '_h2_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'handmade-shop' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['handmade-shop' . '_h3_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'handmade-shop' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['handmade-shop' . '_h4_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'handmade-shop' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['handmade-shop' . '_h5_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'handmade-shop' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['handmade-shop' . '_h6_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'handmade-shop' . '_button_font', 
			'title' => esc_html__('Button Font', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['handmade-shop' . '_button_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'handmade-shop' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['handmade-shop' . '_small_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'handmade-shop' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['handmade-shop' . '_input_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'handmade-shop' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['handmade-shop' . '_quote_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'google':
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'handmade-shop' . '_google_web_fonts', 
			'title' => esc_html__('Google Fonts', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'google_web_fonts', 
			'std' => $defaults[$tab]['handmade-shop' . '_google_web_fonts'] 
		);
		
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'handmade-shop' . '_google_web_fonts_subset', 
			'title' => esc_html__('Google Fonts Subset', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'select_multiple', 
			'std' => '', 
			'choices' => array( 
				esc_html__('Latin Extended', 'handmade-shop') . '|' . 'latin-ext', 
				esc_html__('Arabic', 'handmade-shop') . '|' . 'arabic', 
				esc_html__('Cyrillic', 'handmade-shop') . '|' . 'cyrillic', 
				esc_html__('Cyrillic Extended', 'handmade-shop') . '|' . 'cyrillic-ext', 
				esc_html__('Greek', 'handmade-shop') . '|' . 'greek', 
				esc_html__('Greek Extended', 'handmade-shop') . '|' . 'greek-ext', 
				esc_html__('Vietnamese', 'handmade-shop') . '|' . 'vietnamese', 
				esc_html__('Japanese', 'handmade-shop') . '|' . 'japanese', 
				esc_html__('Korean', 'handmade-shop') . '|' . 'korean', 
				esc_html__('Thai', 'handmade-shop') . '|' . 'thai', 
				esc_html__('Bengali', 'handmade-shop') . '|' . 'bengali', 
				esc_html__('Devanagari', 'handmade-shop') . '|' . 'devanagari', 
				esc_html__('Gujarati', 'handmade-shop') . '|' . 'gujarati', 
				esc_html__('Gurmukhi', 'handmade-shop') . '|' . 'gurmukhi', 
				esc_html__('Hebrew', 'handmade-shop') . '|' . 'hebrew', 
				esc_html__('Kannada', 'handmade-shop') . '|' . 'kannada', 
				esc_html__('Khmer', 'handmade-shop') . '|' . 'khmer', 
				esc_html__('Malayalam', 'handmade-shop') . '|' . 'malayalam', 
				esc_html__('Myanmar', 'handmade-shop') . '|' . 'myanmar', 
				esc_html__('Oriya', 'handmade-shop') . '|' . 'oriya', 
				esc_html__('Sinhala', 'handmade-shop') . '|' . 'sinhala', 
				esc_html__('Tamil', 'handmade-shop') . '|' . 'tamil', 
				esc_html__('Telugu', 'handmade-shop') . '|' . 'telugu' 
			) 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_fields_filter', $options, $tab);	
}

