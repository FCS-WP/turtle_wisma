/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version		1.0.0
 * 
 * Theme Admin Settings Toggles Scripts
 * Created by CMSMasters
 * 
 */


(function ($) { 
	"use strict";
	
	/* General 'Header' Tab Fields Load */
	if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'c_nav') {
		$('#' + cmsmasters_theme_settings.shortname + '_header_search').parents('tr').show();
		$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_add_cont"]').parents('tr').show();
		
		if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_add_cont"]:checked').val() === 'cust_html') {
			$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
		} else {
			$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
		}
	}
	
	
	/* General 'Header' Tab Fields Change */
	$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]').on('change', function () { 
		if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'c_nav') {
			$('#' + cmsmasters_theme_settings.shortname + '_header_search').parents('tr').show();
			$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_add_cont"]').parents('tr').show();
			
			if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_add_cont"]:checked').val() === 'cust_html') {
				$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
			} else {
				$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
			}
		}
	} );
} )(jQuery);

