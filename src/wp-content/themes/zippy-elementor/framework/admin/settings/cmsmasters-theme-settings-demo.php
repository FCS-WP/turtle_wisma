<?php 
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version		1.0.2
 * 
 * Admin Panel Theme Settings Import/Export
 * Created by CMSMasters
 * 
 */


function handmade_shop_options_demo_tabs() {
	$tabs = array();
	
	
	$tabs['import'] = esc_attr__('Import', 'handmade-shop');
	$tabs['export'] = esc_attr__('Export', 'handmade-shop');
	
	
	return $tabs;
}


function handmade_shop_options_demo_sections() {
	$tab = handmade_shop_get_the_tab();
	
	
	switch ($tab) {
	case 'import':
		$sections = array();
		
		$sections['import_section'] = esc_html__('Theme Settings Import', 'handmade-shop');
		
		
		break;
	case 'export':
		$sections = array();
		
		$sections['export_section'] = esc_html__('Theme Settings Export', 'handmade-shop');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return $sections;
} 


function handmade_shop_options_demo_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = handmade_shop_get_the_tab();
	}
	
	
	$options = array();
	
	
	switch ($tab) {
	case 'import':
		$options[] = array( 
			'section' => 'import_section', 
			'id' => 'handmade-shop' . '_demo_import', 
			'title' => esc_html__('Theme Settings', 'handmade-shop'), 
			'desc' => esc_html__("Enter your theme settings data here and click 'Import' button", 'handmade-shop') . (CMSMASTERS_THEME_STYLE_COMPATIBILITY ? '<span class="descr_note">' . esc_html__("Please note that when importing theme settings, these settings will be applied to the appropriate Theme Style (with the same name).", 'handmade-shop') . '<br />' . esc_html__("To see these settings applied, please enable appropriate", 'handmade-shop') . ' <a href="' . esc_url(admin_url('admin.php?page=cmsmasters-settings&tab=theme_style')) . '">' . esc_html__("Theme Style", 'handmade-shop') . '</a>.</span>' : ''), 
			'type' => 'textarea', 
			'std' => '', 
			'class' => '' 
		);
		
		
		break;
	case 'export':
		$options[] = array( 
			'section' => 'export_section', 
			'id' => 'handmade-shop' . '_demo_export', 
			'title' => esc_html__('Theme Settings', 'handmade-shop'), 
			'desc' => esc_html__("Click here to export your theme settings data to the file.", 'handmade-shop') . (CMSMASTERS_THEME_STYLE_COMPATIBILITY ? '<span class="descr_note">' . esc_html__("Please note, that when exporting theme settings, you will export settings for the currently active Theme Style.", 'handmade-shop') . '<br />' . esc_html__("Theme Style can be set", 'handmade-shop') . ' <a href="' . esc_url(admin_url('admin.php?page=cmsmasters-settings&tab=theme_style')) . '">' . esc_html__("here", 'handmade-shop') . '</a>.</span>' : ''), 
			'type' => 'button', 
			'std' => esc_html__('Export Theme Settings', 'handmade-shop'), 
			'class' => 'cmsmasters-demo-export' 
		);
		
		
		break;
	}
	
	
	return $options;	
}

