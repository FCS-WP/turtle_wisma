<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version		1.2.4
 * 
 * Post Single Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = handmade_shop_get_global_options();

$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);

$cmsmasters_post_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_post_sharing_box', true);

$cmsmasters_post_author_box = get_post_meta(get_the_ID(), 'cmsmasters_post_author_box', true);

$cmsmasters_post_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_post_more_posts', true);


list($cmsmasters_layout) = handmade_shop_theme_page_layout_scheme();

if ($cmsmasters_layout == 'fullwidth') {
	$cmsmasters_image_thumb_size = 'cmsmasters-full-masonry-thumb';
} else {
	$cmsmasters_image_thumb_size = 'cmsmasters-masonry-thumb';
}


$cmsmasters_post_format = get_post_format();

?>
<!-- Start Post Single Article  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_post'); ?>>
	<?php 
	if (
		$cmsmasters_option['handmade-shop' . '_blog_post_cat'] 
	) {
		handmade_shop_get_post_category(get_the_ID(), 'category', 'post');
	}
	
	
	if ($cmsmasters_post_title == 'true') {
		handmade_shop_post_title_nolink(get_the_ID(), 'h1');
	}
	
	
	if (
		$cmsmasters_option['handmade-shop' . '_blog_post_date'] || 
		$cmsmasters_option['handmade-shop' . '_blog_post_author'] 
	) {
		echo '<div class="cmsmasters_post_cont_info entry-meta">';
			
			handmade_shop_get_post_author('post');
			
			handmade_shop_get_post_date('post');
			
		echo '</div>';
	}
	
	
	if (
		$cmsmasters_option['handmade-shop' . '_blog_post_like'] || 
		$cmsmasters_option['handmade-shop' . '_blog_post_comment'] 
	) {
		echo '<div class="cmsmasters_post_info entry-meta">';
			
			handmade_shop_get_post_likes('post');
			
			handmade_shop_get_post_comments('post');
			
		echo '</div>';
	}
	
	
	if ($cmsmasters_post_format == 'image') {
		$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);
		
		handmade_shop_post_type_image(get_the_ID(), $cmsmasters_post_image_link, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == 'gallery') {
		$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));
		
		handmade_shop_post_type_slider(get_the_ID(), $cmsmasters_post_images, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == 'video') {
		$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);
		$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);
		$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);
		
		handmade_shop_post_type_video(get_the_ID(), $cmsmasters_post_video_type, $cmsmasters_post_video_link, $cmsmasters_post_video_links, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == '' && !post_password_required() && has_post_thumbnail()) {
		$cmsmasters_post_image_show = get_post_meta(get_the_ID(), 'cmsmasters_post_image_show', true);
		
		if ($cmsmasters_post_image_show != 'true') {
			handmade_shop_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'cmsmasters_open_post_img', false, false, false, true, false);
		}
	}
	
	
	if ($cmsmasters_post_format == 'audio') {
		$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);
		
		handmade_shop_post_type_audio($cmsmasters_post_audio_links);
	}
	
	
	if (get_the_content() != '') {
		echo '<div class="cmsmasters_post_content entry-content">';
			
			the_content();
			
			
			wp_link_pages(array( 
				'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'handmade-shop') . ':</strong>', 
				'after' => '</div>', 
				'link_before' => '<span>', 
				'link_after' => '</span>' 
			));
			
		echo '</div>';
	}
	
	
	if (
		$cmsmasters_option['handmade-shop' . '_blog_post_tag']
	) {
		echo '<footer class="cmsmasters_post_footer entry-meta">';
			
			handmade_shop_get_post_tags();
			
		echo '</footer>';
	}
	?>
</article>
<!-- Finish Post Single Article  -->
<?php 

if ($cmsmasters_post_sharing_box == 'true') {
	handmade_shop_sharing_box();
}


if ($cmsmasters_option['handmade-shop' . '_blog_post_nav_box']) {
	$order_cat = (isset($cmsmasters_option['handmade-shop' . '_blog_post_nav_order_cat']) ? $cmsmasters_option['handmade-shop' . '_blog_post_nav_order_cat'] : false);
	
	handmade_shop_prev_next_posts(__('Post', 'handmade-shop'), $order_cat, 'category');
}


if ($cmsmasters_post_author_box == 'true') {
	handmade_shop_author_box(esc_html__('About author', 'handmade-shop'), 'h2', 'h3');
}


if (get_the_tags()) {
	$tgsarray = array();
	
	foreach (get_the_tags() as $tagone) {
		$tgsarray[] = $tagone->term_id;
	}
} else {
	$tgsarray = '';
}


if ($cmsmasters_post_more_posts != 'hide') {
	handmade_shop_related( 
		'h2', 
		esc_html__('More posts', 'handmade-shop'), 
		esc_html__('No posts found', 'handmade-shop'), 
		$cmsmasters_post_more_posts, 
		$tgsarray, 
		$cmsmasters_option['handmade-shop' . '_blog_more_posts_count'], 
		$cmsmasters_option['handmade-shop' . '_blog_more_posts_pause'], 
		'post' 
	);
}


$get_post = get_post( get_the_ID() );
$show_ping = ( 'open' === $get_post->ping_status );

if ( $show_ping ) {
	echo handmade_shop_get_pings( get_the_ID(), 'h2' );
}


comments_template(); 
