<?php 
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version		1.0.8
 * 
 * Admin Panel Post, Project, Profile Settings
 * Created by CMSMasters
 * 
 */


function handmade_shop_options_single_tabs() {
	$tabs = array();
	
	
	$tabs['post'] = esc_attr__('Post', 'handmade-shop');
	
	if (CMSMASTERS_PROJECT_COMPATIBLE && class_exists('Cmsmasters_Projects')) {
		$tabs['project'] = esc_attr__('Project', 'handmade-shop');
	}
	
	if (CMSMASTERS_PROFILE_COMPATIBLE && class_exists('Cmsmasters_Profiles')) {
		$tabs['profile'] = esc_attr__('Profile', 'handmade-shop');
	}
	
	
	return apply_filters('cmsmasters_options_single_tabs_filter', $tabs);
}


function handmade_shop_options_single_sections() {
	$tab = handmade_shop_get_the_tab();
	
	
	switch ($tab) {
	case 'post':
		$sections = array();
		
		$sections['post_section'] = esc_attr__('Blog Post Options', 'handmade-shop');
		
		
		break;
	case 'project':
		$sections = array();
		
		$sections['project_section'] = esc_attr__('Portfolio Project Options', 'handmade-shop');
		
		
		break;
	case 'profile':
		$sections = array();
		
		$sections['profile_section'] = esc_attr__('Person Block Profile Options', 'handmade-shop');
		
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_sections_filter', $sections, $tab);
} 


function handmade_shop_options_single_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = handmade_shop_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = handmade_shop_settings_single_defaults();
	
	
	switch ($tab) {
	case 'post':
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'handmade-shop' . '_blog_post_layout', 
			'title' => esc_html__('Layout Type', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['handmade-shop' . '_blog_post_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'handmade-shop') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'handmade-shop') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'handmade-shop') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'handmade-shop' . '_blog_post_title', 
			'title' => esc_html__('Post Title', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_blog_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'handmade-shop' . '_blog_post_date', 
			'title' => esc_html__('Post Date', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_blog_post_date'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'handmade-shop' . '_blog_post_cat', 
			'title' => esc_html__('Post Categories', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_blog_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'handmade-shop' . '_blog_post_author', 
			'title' => esc_html__('Post Author', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_blog_post_author'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'handmade-shop' . '_blog_post_comment', 
			'title' => esc_html__('Post Comments', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_blog_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'handmade-shop' . '_blog_post_tag', 
			'title' => esc_html__('Post Tags', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_blog_post_tag'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'handmade-shop' . '_blog_post_like', 
			'title' => esc_html__('Post Likes', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_blog_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'handmade-shop' . '_blog_post_nav_box', 
			'title' => esc_html__('Posts Navigation Box', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_blog_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'handmade-shop' . '_blog_post_nav_order_cat', 
			'title' => esc_html__('Posts Navigation Order by Category', 'handmade-shop'), 
			'desc' => esc_html__('enable', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_blog_post_nav_order_cat'] 
		);
		
		if (class_exists('Cmsmasters_Content_Composer')) {
			$options[] = array( 
				'section' => 'post_section', 
				'id' => 'handmade-shop' . '_blog_post_share_box', 
				'title' => esc_html__('Sharing Box', 'handmade-shop'), 
				'desc' => esc_html__('show', 'handmade-shop'), 
				'type' => 'checkbox', 
				'std' => $defaults[$tab]['handmade-shop' . '_blog_post_share_box'] 
			);
		}
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'handmade-shop' . '_blog_post_author_box', 
			'title' => esc_html__('About Author Box', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_blog_post_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'handmade-shop' . '_blog_more_posts_box', 
			'title' => esc_html__('More Posts Box', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['handmade-shop' . '_blog_more_posts_box'], 
			'choices' => array( 
				esc_html__('Show Related Posts', 'handmade-shop') . '|related', 
				esc_html__('Show Popular Posts', 'handmade-shop') . '|popular', 
				esc_html__('Show Recent Posts', 'handmade-shop') . '|recent', 
				esc_html__('Hide More Posts Box', 'handmade-shop') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'handmade-shop' . '_blog_more_posts_count', 
			'title' => esc_html__('More Posts Box Items Number', 'handmade-shop'), 
			'desc' => esc_html__('posts', 'handmade-shop'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['handmade-shop' . '_blog_more_posts_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'post_section', 
			'id' => 'handmade-shop' . '_blog_more_posts_pause', 
			'title' => esc_html__('More Posts Slider Pause Time', 'handmade-shop'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'handmade-shop'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['handmade-shop' . '_blog_more_posts_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		
		break;
	case 'project':
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_project_title', 
			'title' => esc_html__('Project Title', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_project_title'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_project_details_title', 
			'title' => esc_html__('Project Details Title', 'handmade-shop'), 
			'desc' => esc_html__('Enter a project details block title', 'handmade-shop'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_project_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_project_date', 
			'title' => esc_html__('Project Date', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_project_date'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_project_cat', 
			'title' => esc_html__('Project Categories', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_project_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_project_author', 
			'title' => esc_html__('Project Author', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_project_author'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_project_comment', 
			'title' => esc_html__('Project Comments', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_project_comment'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_project_tag', 
			'title' => esc_html__('Project Tags', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_project_tag'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_project_like', 
			'title' => esc_html__('Project Likes', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_project_like'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_project_link', 
			'title' => esc_html__('Project Link', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_project_link'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_project_share_box', 
			'title' => esc_html__('Sharing Box', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_project_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_project_nav_box', 
			'title' => esc_html__('Projects Navigation Box', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_project_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_project_nav_order_cat', 
			'title' => esc_html__('Projects Navigation Order by Category', 'handmade-shop'), 
			'desc' => esc_html__('enable', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_project_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_project_author_box', 
			'title' => esc_html__('About Author Box', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_project_author_box'] 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_more_projects_box', 
			'title' => esc_html__('More Projects Box', 'handmade-shop'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_more_projects_box'], 
			'choices' => array( 
				esc_html__('Show Related Projects', 'handmade-shop') . '|related', 
				esc_html__('Show Popular Projects', 'handmade-shop') . '|popular', 
				esc_html__('Show Recent Projects', 'handmade-shop') . '|recent', 
				esc_html__('Hide More Projects Box', 'handmade-shop') . '|hide' 
			) 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_more_projects_count', 
			'title' => esc_html__('More Projects Box Items Number', 'handmade-shop'), 
			'desc' => esc_html__('projects', 'handmade-shop'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_more_projects_count'], 
			'min' => '2', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_more_projects_pause', 
			'title' => esc_html__('More Projects Slider Pause Time', 'handmade-shop'), 
			'desc' => esc_html__("in seconds, if '0' - autoslide disabled", 'handmade-shop'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_more_projects_pause'], 
			'min' => '0', 
			'max' => '20' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_project_slug', 
			'title' => esc_html__('Project Slug', 'handmade-shop'), 
			'desc' => esc_html__('Enter a page slug that should be used for your projects single item', 'handmade-shop'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_project_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_pj_categs_slug', 
			'title' => esc_html__('Project Categories Slug', 'handmade-shop'), 
			'desc' => esc_html__('Enter page slug that should be used on projects categories archive page', 'handmade-shop'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_pj_categs_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'project_section', 
			'id' => 'handmade-shop' . '_portfolio_pj_tags_slug', 
			'title' => esc_html__('Project Tags Slug', 'handmade-shop'), 
			'desc' => esc_html__('Enter page slug that should be used on projects tags archive page', 'handmade-shop'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['handmade-shop' . '_portfolio_pj_tags_slug'], 
			'class' => '' 
		);
		
		
		break;
	case 'profile':
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'handmade-shop' . '_profile_post_title', 
			'title' => esc_html__('Profile Title', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_profile_post_title'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'handmade-shop' . '_profile_post_details_title', 
			'title' => esc_html__('Profile Details Title', 'handmade-shop'), 
			'desc' => esc_html__('Enter a profile details block title', 'handmade-shop'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['handmade-shop' . '_profile_post_details_title'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'handmade-shop' . '_profile_post_cat', 
			'title' => esc_html__('Profile Categories', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_profile_post_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'handmade-shop' . '_profile_post_comment', 
			'title' => esc_html__('Profile Comments', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_profile_post_comment'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'handmade-shop' . '_profile_post_like', 
			'title' => esc_html__('Profile Likes', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_profile_post_like'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'handmade-shop' . '_profile_post_nav_box', 
			'title' => esc_html__('Profiles Navigation Box', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_profile_post_nav_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'handmade-shop' . '_profile_post_nav_order_cat', 
			'title' => esc_html__('Profiles Navigation Order by Category', 'handmade-shop'), 
			'desc' => esc_html__('enable', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_profile_post_nav_order_cat'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'handmade-shop' . '_profile_post_share_box', 
			'title' => esc_html__('Sharing Box', 'handmade-shop'), 
			'desc' => esc_html__('show', 'handmade-shop'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['handmade-shop' . '_profile_post_share_box'] 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'handmade-shop' . '_profile_post_slug', 
			'title' => esc_html__('Profile Slug', 'handmade-shop'), 
			'desc' => esc_html__('Enter a page slug that should be used for your profiles single item', 'handmade-shop'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['handmade-shop' . '_profile_post_slug'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'profile_section', 
			'id' => 'handmade-shop' . '_profile_pl_categs_slug', 
			'title' => esc_html__('Profile Categories Slug', 'handmade-shop'), 
			'desc' => esc_html__('Enter page slug that should be used on profiles categories archive page', 'handmade-shop'), 
			'type' => 'text', 
			'std' => $defaults[$tab]['handmade-shop' . '_profile_pl_categs_slug'], 
			'class' => '' 
		);
		
		
		break;
	}
	
	
	return apply_filters('cmsmasters_options_single_fields_filter', $options, $tab);
}

