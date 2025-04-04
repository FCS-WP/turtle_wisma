<?php 
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version		1.1.1
 * 
 * Template Functions
 * Created by CMSMasters
 * 
 */


/* Get Previous & Next Post Links Function */
function handmade_shop_prev_next_posts($cmsmasters_post_type_name = '', $order_cat = false, $tax_name = 'category') {
	$cmsmasters_post_type = get_post_type();

	$published_posts = wp_count_posts($cmsmasters_post_type)->publish;
	
	
	if ($published_posts > 1) {
		echo '<aside class="post_nav">';
		
		
		previous_post_link('<span class="cmsmasters_prev_post"><span class="post_nav_sub">' . esc_html__('Previous', 'handmade-shop') . '<span class="post_nav_type"> ' . esc_html($cmsmasters_post_type_name) . ' </span></span>%link<span class="cmsmasters_prev_arrow"><span></span></span></span>', '%title', $order_cat, '', $tax_name);
		
		next_post_link('<span class="cmsmasters_next_post"><span class="post_nav_sub">' . esc_html__('Next', 'handmade-shop') . '<span class="post_nav_type"> ' . esc_html($cmsmasters_post_type_name) . ' </span></span>%link<span class="cmsmasters_next_arrow"><span></span></span></span>', '%title', $order_cat, '', $tax_name);
		
		
		echo '</aside>';
	}
}



/* Get Sharing Box Function */
function handmade_shop_sharing_box($title_box = false, $tag = 'h3') {
	if (class_exists('Cmsmasters_Content_Composer')) {
		echo cmsmasters_sharing_box($title_box, $tag);
	}
}



/* Get About Author Box Function */
function handmade_shop_author_box($title_box = false, $tag = 'h3', $author_tag = 'h4') {
	$user_email = get_the_author_meta('user_email');
	
	
	$user_first_name = get_the_author_meta('first_name') ? get_the_author_meta('first_name') : false;
	
	$user_last_name = get_the_author_meta('last_name') ? get_the_author_meta('last_name') : false;
	
	$user_url = get_the_author_meta('url') ? get_the_author_meta('url') : false;
	
	$user_description = get_the_author_meta('description') ? get_the_author_meta('description') : false;
	
	
	if ($user_description) {
		echo '<aside class="about_author">';
		
		
		if ($title_box) {
			echo '<' . esc_html($tag) . ' class="about_author_title">' . esc_html($title_box) . '</' . esc_html($tag) . '>';
		}
		
		
		echo '<div class="about_author_inner">';
		
		
		$out = '';
		
		
		if ($user_first_name) {
			$out .= $user_first_name;
		}
		
		
		if ($user_first_name && $user_last_name) {
			$out .= ' ' . $user_last_name;
		} elseif ($user_last_name) {
			$out .= $user_last_name;
		}
		
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ' (';
		}
		
		
		if (get_the_author()) {
			$out .= get_the_author();
		}
		
		
		if (get_the_author() && ($user_first_name || $user_last_name)) {
			$out .= ')';
		}
		
		
		echo '<figure class="about_author_avatar">' . 
			get_avatar($user_email, 145, get_option('avatar_default')) . 
		'</figure>' . 
		'<div class="about_author_cont">';
		
		
		if ($out != '') {
			echo '<' . esc_html($author_tag) . ' class="about_author_cont_title vcard author"><span class="fn" rel="author">' . esc_html($out) . '</span></' . esc_html($author_tag) . '>';
		}
		
		
		echo '<p>' . str_replace("\n", '<br />', $user_description) . '</p>';
		
		
		if ($user_url) {
			echo '<a class="about_author_site" href="' . esc_url($user_url) . '" title="' . esc_attr(get_the_author()) . ' ' . esc_attr__('website', 'handmade-shop') . '" target="_blank">' . esc_html($user_url) . '</a>';
		}
		
		
		echo '</div>' . 
			'</div>' . 
		'</aside>';
	}
}



/* Get Related, Popular & Recent Posts Function */
function handmade_shop_related($tag = 'h3', $title = '', $no_title = '', $box_type = false, $tgsarray = null, $items_number = 5, $pause_time = 5, $type = 'post', $taxonomy = null) {
	if ( 
		($box_type == 'related' && !empty($tgsarray)) || 
		$box_type == 'popular' || 
		$box_type == 'recent' 
	) {
		$autoplay = ((int) $pause_time > 0) ? $pause_time * 1000 : 'false';
		
		
		$r_args = array( 
			'posts_per_page' => $items_number, 
			'post_status' => 'publish', 
			'ignore_sticky_posts' => 1, 
			'post__not_in' => array(get_the_ID()), 
			'post_type' => $type 
		);
		
		
		if ($box_type == 'related' && !empty($tgsarray)) {
			if ($type == 'post') {
				$r_args['tag__in'] = $tgsarray;
			} elseif ($type != 'post' && $taxonomy) {
				$r_args['tax_query'] = array( 
					array( 
						'taxonomy' => $taxonomy, 
						'field' => 'term_id', 
						'terms' => $tgsarray 
					) 
				);
			}
		} elseif ($box_type == 'popular') {
			$r_args['order'] = 'DESC';
			
			$r_args['orderby'] = 'meta_value_num';
			
			$r_args['meta_key'] = 'cmsmasters_likes';
		}
		
		
		$r_query = new WP_Query($r_args);
		
		
		if ($r_query->have_posts()) {
			echo "<aside class=\"cmsmasters_single_slider\">";
				echo "<" . esc_html($tag) . " class=\"cmsmasters_single_slider_title\">" . 
					($title != '' ? esc_html($title) : esc_html__('More items', 'handmade-shop')) . 
				"</" . esc_html($tag) . ">" . 
				'<div class="cmsmasters_single_slider_inner">' . 
					'<div' . 
						' id="cmsmasters_owl_slider_' . esc_attr(uniqid()) . '"' . 
						' class="cmsmasters_owl_slider"' . 
						' data-single-item="false"' . 
						' data-auto-play="' . esc_attr($autoplay) . '"' . 
						' data-pagination="false"' . 
					'>';
					
						while ($r_query->have_posts()) : $r_query->the_post();
							echo "<div class=\"cmsmasters_owl_slider_item cmsmasters_single_slider_item\">
								<div class=\"cmsmasters_single_slider_item_outer\">";
								
									handmade_shop_thumb(get_the_ID(), 'cmsmasters-project-thumb', true, false, true, false, true, true, false, false, false, 'cmsmasters_theme_icon_image');
									
									echo "<div class=\"cmsmasters_single_slider_item_inner\">
										<h6 class=\"cmsmasters_single_slider_item_title\">
											<a href=\"" . esc_url(get_permalink()) . "\">" . cmsmasters_title(get_the_ID(), false) . "</a>
										</h6>
									</div>
								</div>
							</div>";
						endwhile;
						
					echo "</div>
				</div>
			</aside>";
		}
		
		
		wp_reset_postdata();
	}
}



/* Get Posts Author Avatar Function */
function handmade_shop_author_avatar($template_type = 'page') {
	$user_email = get_the_author_meta('user_email') ? get_the_author_meta('user_email') : false;
	
	
	if ($template_type == 'page') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	} else if ($template_type == 'post') {
		if (get_the_tags()) {
			echo '<figure>' . 
				get_avatar($user_email, 75, get_option('avatar_default')) . 
			'</figure>';
		}
	}
}



/* Get Pingbacks & Trackbacks Function */
function handmade_shop_get_pings($id, $tag = 'h3') {
	$out = '';
	
	$pings = get_comments(array(
		'type' => 		'pings',
		'post_id' => 	$id
	));
	
	
	if (sizeof($pings) > 0) {
		$out .= '<aside class="cmsmasters_pings_list">' . "\n" .
			'<' . esc_html($tag) . '>' . esc_html__('Trackbacks and Pingbacks', 'handmade-shop') . '</' . esc_html($tag) . '>' . "\n" .
			'<div class="cmsmasters_pings_wrap">' . "\n" .
				'<ol class="pingslist">' . "\n";
		
		
		$out .= wp_list_comments(array(
			'short_ping' => 	true,
			'echo' => 			false
		), $pings);
		
		
		$out .= '</ol>' . "\n" .
			'</div>' . "\n" .
		'</aside>';
	}
	
	
	return $out;
}

