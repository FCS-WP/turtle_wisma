<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version		1.1.1
 * 
 * Post Default Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_post_metadata = !is_home() ? explode(',', $cmsmasters_metadata) : array();


$date = (in_array('date', $cmsmasters_post_metadata) || is_home()) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_post_metadata) || is_home())) ? true : false;
$author = (in_array('author', $cmsmasters_post_metadata) || is_home()) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_post_metadata) || is_home())) ? true : false;
$likes = (in_array('likes', $cmsmasters_post_metadata) || (is_home() && CMSMASTERS_CONTENT_COMPOSER)) ? true : false;
$more = (in_array('more', $cmsmasters_post_metadata) || is_home()) ? true : false;


$cmsmasters_post_format = get_post_format();

?>
<!-- Start Post Default Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_post_default'); ?>>
	<div class="cmsmasters_post_cont">
		<?php
		if ($cmsmasters_post_format == 'image') {
			$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);
			
			if ($cmsmasters_post_image_link != '' || has_post_thumbnail()) {
				echo '<div class="cmsmasters_media_wrap">';
				
					handmade_shop_post_type_image(get_the_ID(), $cmsmasters_post_image_link);
					
					$categories ? handmade_shop_get_post_category(get_the_ID(), 'category', 'page') : '';
				
				echo '</div>';
			} else {
				$categories ? handmade_shop_get_post_category(get_the_ID(), 'category', 'page') : '';
			}
		} elseif ($cmsmasters_post_format == 'gallery') {
			$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));
			
			$empty_test_array = array_filter($cmsmasters_post_images);
			
			if ((!empty($empty_test_array) && sizeof($cmsmasters_post_images) > 0) || has_post_thumbnail()) {
				echo '<div class="cmsmasters_media_wrap">';
					
					$slider_data = ' data-pagination="false"';
					
					handmade_shop_post_type_slider(get_the_ID(), $cmsmasters_post_images, 'post-thumbnail', $slider_data);
					
					$categories ? handmade_shop_get_post_category(get_the_ID(), 'category', 'page') : '';
				
				echo '</div>';
			} else {
				$categories ? handmade_shop_get_post_category(get_the_ID(), 'category', 'page') : '';
			}
		} elseif ($cmsmasters_post_format == 'video') {
			$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);
			$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);
			$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);
			
			if (($cmsmasters_post_video_type == 'selfhosted' && !empty($cmsmasters_post_video_links) && sizeof($cmsmasters_post_video_links) > 0) || ($cmsmasters_post_video_type == 'embedded' && $cmsmasters_post_video_link != '') || (has_post_thumbnail())) {
				echo '<div class="cmsmasters_media_wrap">';
				
					handmade_shop_post_type_video(get_the_ID(), $cmsmasters_post_video_type, $cmsmasters_post_video_link, $cmsmasters_post_video_links);
					
					$categories ? handmade_shop_get_post_category(get_the_ID(), 'category', 'page') : '';
				
				echo '</div>';
			} else {
				$categories ? handmade_shop_get_post_category(get_the_ID(), 'category', 'page') : '';
			}
		} elseif ($cmsmasters_post_format == 'audio' && has_post_thumbnail()) {
			echo '<div class="cmsmasters_media_wrap">';
			
				handmade_shop_thumb(get_the_ID(), 'post-thumbnail', true, false, false, false, false, true, false);
				
				$categories ? handmade_shop_get_post_category(get_the_ID(), 'category', 'page') : '';
			
			echo '</div>';
		} elseif ($cmsmasters_post_format == '' && !post_password_required() && has_post_thumbnail()) {
			echo '<div class="cmsmasters_media_wrap">';
			
				handmade_shop_thumb(get_the_ID(), 'post-thumbnail', true, false, false, false, false, true, false);
				
				$categories ? handmade_shop_get_post_category(get_the_ID(), 'category', 'page') : '';
			
			echo '</div>';
		} else {
			$categories ? handmade_shop_get_post_category(get_the_ID(), 'category', 'page') : '';
		}
		
		
		if ($cmsmasters_post_format == 'audio') {
			$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);
			
			handmade_shop_post_type_audio($cmsmasters_post_audio_links);
		}
		
		
		if ($author || $date) {
			echo '<div class="cmsmasters_post_cont_info entry-meta">';
				
				$author ? handmade_shop_get_post_author('page') : '';
				
				$date ? handmade_shop_get_post_date('page', 'default') : '';
			
			echo '</div>';
		}
		
		
		handmade_shop_post_heading(get_the_ID(), 'h2');
		
		
		handmade_shop_post_exc_cont(100);
		
		
		if ($more || $likes || $comments) {
			echo '<footer class="cmsmasters_post_footer entry-meta">';
				
				$more ? handmade_shop_post_more(get_the_ID()) : '';
				
				
				if ($likes || $comments) {
					echo '<div class="cmsmasters_post_info entry-meta">';
						
						$likes ? handmade_shop_get_post_likes('page') : '';
						
						$comments ? handmade_shop_get_post_comments('page') : '';
						
					echo '</div>';
				}
				
			echo '</footer>';
		}
		?>
	</div>
</article>
<!-- Finish Post Default Article  -->

