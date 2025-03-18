<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version		1.1.0
 * 
 * Posts Slider Project Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_project_metadata);


$title = in_array('title', $cmsmasters_metadata) ? true : false;
$categories = (get_the_terms(get_the_ID(), 'pj-categs') && in_array('categories', $cmsmasters_metadata)) ? true : false;
$comments = (comments_open() && in_array('comments', $cmsmasters_metadata)) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;


$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);
$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);
$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);


$cmsmasters_post_format = get_post_format();

?>
<!-- Start Posts Slider Project Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_project'); ?>>
	<div class="cmsmasters_slider_project_outer">
	<?php 
		handmade_shop_thumb_rollover(get_the_ID(), 'cmsmasters-project-thumb', false, false, false, false, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url);
		
		
		if ($title || $categories || $likes || $comments) {
			echo '<div class="cmsmasters_slider_project_inner">';
				
				if ($categories) {
					echo '<div class="cmsmasters_slider_project_cont_info entry-meta">';
						
						handmade_shop_get_slider_post_category(get_the_ID(), 'pj-categs', 'project');
						
					echo '</div>';
				}
				
				
				$title ? handmade_shop_slider_post_heading(get_the_ID(), 'project', 'h2', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, true, $cmsmasters_project_link_target) : '';
				
				
				if ($likes || $comments) {
					echo '<footer class="cmsmasters_slider_project_footer entry-meta">';
						
						($likes) ? handmade_shop_slider_post_like('project') : '';
						
						($comments) ? handmade_shop_get_slider_post_comments('project') : '';
						
					echo '</footer>';
				}
				
			echo '</div>';
		}
	?>
	</div>
</article>
<!-- Finish Posts Slider Project Article  -->

