<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.3.1
 * 
 * Custom Theme Widgets
 * Created by CMSMasters
 * 
 */


/**
 * Contact Information Widget Class
 */
class WP_Widget_Custom_Contact_Info extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_contact_info_entries', 
			'description' => 	esc_html__('Your contact information', 'handmade-shop') 
		);
		
		$control_ops = array( 
			'width' => 	600 
		);
		
		parent::__construct('custom-contact-info', esc_attr__('Contact Information', 'handmade-shop'), $widget_ops, $control_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Contact Information', 'handmade-shop') : $instance['title'], $instance, $this->id_base);
        $name = isset($instance['name']) ? esc_html($instance['name']) : '';
        $url = isset($instance['url']) ? $instance['url'] : '';
        $email = isset($instance['email']) ? sanitize_email($instance['email']) : '';
        $phone = isset($instance['phone']) ? esc_html($instance['phone']) : '';
        $address = isset($instance['address']) ? esc_html($instance['address']) : '';
        $city = isset($instance['city']) ? esc_html($instance['city']) : '';
        $state = isset($instance['state']) ? esc_html($instance['state']) : '';
        $zip = isset($instance['zip']) ? esc_html($instance['zip']) : '';
        $country = isset($instance['country']) ? esc_html($instance['country']) : '';
        $time = isset($instance['time']) ? esc_html($instance['time']) : '';
		
		echo wp_kses_post($before_widget);
		
		if ($title) { 
			echo wp_kses_post($before_title . esc_html($title) . $after_title);
		}
		
		if ( 
			$address != '' || 
			$city != '' || 
			$state != '' || 
			$zip != '' || 
			$country != '' 
		) {
			echo '<span class="adr adress_wrap contact_info_item">' . 
				'<span class="contact_info_item_title">' . esc_html__('Address:', 'handmade-shop') . '</span><span class="contact_info_item_desc">';
		}
		
		if ($address != '') { 
			echo '<span class="street-address contact_widget_address">' . esc_html($address) . '</span>';
		}
		
		if ($city != '') { 
			echo '<span class="locality contact_widget_city"> ' . esc_html($city) . '</span>';
		}
		
		if ($state != '') { 
			echo '<span class="region contact_widget_state"> ' . esc_html($state) . '</span>';
		}
		
		if ($zip != '') { 
			echo '<span class="postal-code contact_widget_zip"> ' . esc_html($zip) . '</span>';
		}
		
		if ($country != '') { 
			echo '<span class="country-name contact_widget_country"> ' . esc_html($country) . '</span>';
		}
		
		if ( 
			$address != '' || 
			$city != '' || 
			$state != '' || 
			$zip != '' || 
			$country != '' 
		) {
			echo '</span></span>';
		}
		
		if ($time != '') { 
            echo '<span class="contact_widget_time contact_info_item">' . 
				'<span class="contact_info_item_title">' . esc_html__('Time:', 'handmade-shop') . '</span>' . 
				'<span class="contact_info_item_desc time">' . esc_html($time) . '</span>' . 
			'</span>';
		}
		
		if ($name != '') { 
            echo '<span class="contact_widget_name  contact_info_item">' . 
				'<span class="contact_info_item_title">' . esc_html__('Name:', 'handmade-shop') . '</span>' . 
				'<span class="contact_info_item_desc fn contact_widget_name_inner">' . esc_html($name) . '</span>' . 
			'</span>';
		}
		
        if ($url != '') { 
            echo '<span class="contact_widget_url contact_info_item">' . 
				'<span class="contact_info_item_title">' . esc_html__('URL:', 'handmade-shop') . '</span>' . 
				'<span class="contact_info_item_desc"><a class="url" href="' . esc_url($url) . '">' . esc_html($url) . '</a></span>' . 
			'</span>';
		}
		
        if ($email != '') { 
            echo '<span class="contact_widget_email contact_info_item">' . 
				'<span class="contact_info_item_title">' . esc_html__('Email:', 'handmade-shop') . '</span>' . 
				'<span class="contact_info_item_desc"><a class="email" href="mailto:' . antispambot($email, 1) . '">' . antispambot($email) . '</a></span>' . 
			'</span>';
		}
		
		if ($phone != '') { 
            echo '<span class="contact_widget_phone contact_info_item">' . 
				'<span class="contact_info_item_title">' . esc_html__('Phone:', 'handmade-shop') . '</span>' . 
				'<span class="contact_info_item_desc tel">' . esc_html($phone) . '</span>' . 
			'</span>';
		}
		
        echo wp_kses_post($after_widget);
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['name'] = strip_tags($new_instance['name']);
        $instance['url'] = strip_tags($new_instance['url']);
        $instance['email'] = strip_tags($new_instance['email']);
        $instance['phone'] = strip_tags($new_instance['phone']);
        $instance['address'] = strip_tags($new_instance['address']);
        $instance['city'] = strip_tags($new_instance['city']);
        $instance['state'] = strip_tags($new_instance['state']);
        $instance['zip'] = strip_tags($new_instance['zip']);
        $instance['country'] = strip_tags($new_instance['country']);
        $instance['time'] = strip_tags($new_instance['time']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $name = isset($instance['name']) ? esc_attr($instance['name']) : '';
        $url = isset($instance['url']) ? esc_attr($instance['url']) : '';
        $email = isset($instance['email']) ? esc_attr($instance['email']) : '';
        $phone = isset($instance['phone']) ? esc_attr($instance['phone']) : '';
        $address = isset($instance['address']) ? esc_attr($instance['address']) : '';
        $city = isset($instance['city']) ? esc_attr($instance['city']) : '';
        $state = isset($instance['state']) ? esc_attr($instance['state']) : '';
        $zip = isset($instance['zip']) ? esc_attr($instance['zip']) : '';
        $country = isset($instance['country']) ? esc_attr($instance['country']) : '';
        $time = isset($instance['time']) ? esc_attr($instance['time']) : '';
        ?>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('name')); ?>"><?php esc_html_e('Name', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('name')); ?>" name="<?php echo esc_attr($this->get_field_name('name')); ?>" type="text" value="<?php echo esc_attr($name); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('url')); ?>"><?php esc_html_e('Website', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('url')); ?>" name="<?php echo esc_attr($this->get_field_name('url')); ?>" type="text" value="<?php echo esc_attr($url); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($email); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($phone); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" type="text" value="<?php echo esc_attr($address); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('city')); ?>"><?php esc_html_e('City', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('city')); ?>" name="<?php echo esc_attr($this->get_field_name('city')); ?>" type="text" value="<?php echo esc_attr($city); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('state')); ?>"><?php esc_html_e('State', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('state')); ?>" name="<?php echo esc_attr($this->get_field_name('state')); ?>" type="text" value="<?php echo esc_attr($state); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('zip')); ?>"><?php esc_html_e('Zip', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('zip')); ?>" name="<?php echo esc_attr($this->get_field_name('zip')); ?>" type="text" value="<?php echo esc_attr($zip); ?>" />
            </label>
        </p>
        <p class="r_half">
            <label for="<?php echo esc_attr($this->get_field_id('country')); ?>"><?php esc_html_e('Country', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('country')); ?>" name="<?php echo esc_attr($this->get_field_name('country')); ?>" type="text" value="<?php echo esc_attr($country); ?>" />
            </label>
        </p>
        <p class="l_half">
            <label for="<?php echo esc_attr($this->get_field_id('time')); ?>"><?php esc_html_e('Time', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('time')); ?>" name="<?php echo esc_attr($this->get_field_name('time')); ?>" type="text" value="<?php echo esc_attr($time); ?>" />
            </label>
        </p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Latest Projects Widget Class
 */
class WP_Widget_Custom_Latest_Projects extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_latest_projects_entries', 
			'description' => 	esc_attr__('Latest projects from your portfolio', 'handmade-shop') 
		);
		
		parent::__construct('custom-latest-projects', esc_attr__('Latest Projects', 'handmade-shop'), $widget_ops);
	}
	
    function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Latest Projects', 'handmade-shop') : $instance['title'], $instance, $this->id_base);
		$type = isset($instance['type']) ? $instance['type'] : '';
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
        $autoplay = isset($instance['autoplay']) ? $instance['autoplay'] : false;
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
		
        $queryArgs = array( 
			'posts_per_page' => 		$number, 
			'post_status' => 			'publish', 
			'ignore_sticky_posts' => 	1, 
			'post_type' => 				'project' 
		);
		
		if ($type != '') {
            $queryArgs['tax_query'] = array(
                array( 
                    'taxonomy' => 	'pj-categs', 
                    'field' => 		'slug', 
                    'terms' => 		$type 
                )
            );
		}
		
        $lp = new WP_Query($queryArgs);
		
        if ($lp->have_posts()) { 
			echo wp_kses_post($before_widget);
			
			
			if ($title) { 
				echo wp_kses_post($before_title . esc_html($title) . $after_title);
			}
			
			
			echo '<div' . 
				' id="cmsmasters_owl_slider_' . esc_attr(uniqid()) . '"' . 
				' class="cmsmasters_owl_slider owl-carousel widget_custom_projects_entries_slides"' . 
				' data-auto-play="' . ($autoplay ? '5000' : 'false') . '"' . 
			'>';
			
            while ($lp->have_posts()) : $lp->the_post();
				
				$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

				$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);
				
				$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);
				
				echo '<div class="cmsmasters_owl_slider_item cmsmasters_slider_project">' . 
					'<div class="cmsmasters_slider_project_media_wrap">';
						
						handmade_shop_thumb_rollover(get_the_ID(), 'cmsmasters-project-thumb', false, false, false, false, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url);
						
						handmade_shop_get_project_category(get_the_ID(), 'pj-categs', 'page');
						
					echo '</div>';
					
					handmade_shop_slider_post_heading(get_the_ID(), 'project', 'h3', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, true, $cmsmasters_project_link_target);
					
				echo '</div>';
				
			endwhile;
			
			echo '</div>' . 
			wp_kses_post($after_widget);
        }
		
		wp_reset_postdata();
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['type'] = $new_instance['type'];
        $instance['number'] = absint($new_instance['number']);
		
		$instance['autoplay'] = 0;
		
		if ($new_instance['autoplay']) {
			$instance['autoplay'] = 1;
		}
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $type = isset($instance['type']) ? esc_attr($instance['type']) : '';
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
		$instance = wp_parse_args((array) $instance, array( 
			'autoplay' => false 
		) );
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('type')); ?>"><?php esc_html_e('Show Only from Projects Type', 'handmade-shop'); ?>:<br />
                <select id="<?php echo esc_attr($this->get_field_id('type')); ?>" name="<?php echo esc_attr($this->get_field_name('type')); ?>" class="widefat">
                    <option value=""><?php esc_html_e('Show all projects', 'handmade-shop'); ?>&nbsp;</option>
				<?php 
					$pj_categs = get_terms('pj-categs', 'orderby=name&hide_empty=0');
					
					if (sizeof($pj_categs) > 0) {
						foreach($pj_categs as $pj_categ) {
							if ($type == $pj_categ->slug) {
								echo '<option value="' . esc_attr($pj_categ->slug) . '" selected="selected">' . esc_html($pj_categ->name) . '&nbsp;</option>';
							} else {
								echo '<option value="' . esc_attr($pj_categ->slug) . '">' . esc_html($pj_categ->name) . '&nbsp;</option>';
							}
						}
					}
				?>
                </select>
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e("Enter the number of latest projects you'd like to display", 'handmade-shop'); ?>:<br /><br />
                <input id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" />
                <small class="s_red"><?php esc_html_e('default is', 'handmade-shop'); ?> 3</small><br />
            </label>
        </p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['autoplay'], true); ?> id="<?php echo esc_attr($this->get_field_id('autoplay')); ?>" name="<?php echo esc_attr($this->get_field_name('autoplay')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('autoplay')); ?>"><?php esc_html_e('Autoplay', 'handmade-shop'); ?></label>
		</p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Popular Projects Widget Class
 */
class WP_Widget_Custom_Popular_Projects extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_popular_projects_entries', 
			'description' => 	esc_attr__('Popular projects from your portfolio', 'handmade-shop') 
		);
		
		parent::__construct('custom-popular-projects', esc_attr__('Popular Projects', 'handmade-shop'), $widget_ops);
	}
	
    function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Popular Projects', 'handmade-shop') : $instance['title'], $instance, $this->id_base);
		$type = isset($instance['type']) ? $instance['type'] : '';
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
        $autoplay = isset($instance['autoplay']) ? $instance['autoplay'] : false;
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
		
        $queryArgs = array( 
			'posts_per_page' => 		$number, 
			'post_status' => 			'publish', 
			'ignore_sticky_posts' => 	1, 
			'post_type' => 				'project', 
			'order' => 					'DESC', 
			'orderby' => 				'meta_value_num', 
			'meta_key' => 				'cmsmasters_likes' 
		);
		
		if ($type != '') {
            $queryArgs['tax_query'] = array(
                array( 
                    'taxonomy' => 	'pj-categs', 
                    'field' => 		'slug', 
                    'terms' => 		array($type) 
                )
            );
		}
		
        $pp = new WP_Query($queryArgs);
		
        if ($pp->have_posts()) { 
			echo wp_kses_post($before_widget);
			
			
			if ($title) { 
				echo wp_kses_post($before_title . esc_html($title) . $after_title);
			}
			
			
			echo '<div' . 
				' id="cmsmasters_owl_slider_' . esc_attr(uniqid()) . '"' . 
				' class="cmsmasters_owl_slider owl-carousel widget_custom_projects_entries_slides"' . 
				' data-auto-play="' . ($autoplay ? '5000' : 'false') . '"' . 
			'>';
			
            while ($pp->have_posts()) : $pp->the_post();
				
				$cmsmasters_project_link_url = get_post_meta(get_the_ID(), 'cmsmasters_project_link_url', true);

				$cmsmasters_project_link_redirect = get_post_meta(get_the_ID(), 'cmsmasters_project_link_redirect', true);
				
				$cmsmasters_project_link_target = get_post_meta(get_the_ID(), 'cmsmasters_project_link_target', true);
				
				echo '<div class="cmsmasters_owl_slider_item cmsmasters_slider_project">' . 
					'<div class="cmsmasters_slider_project_media_wrap">';
						
						handmade_shop_thumb_rollover(get_the_ID(), 'cmsmasters-project-thumb', false, false, false, false, false, false, false, false, true, $cmsmasters_project_link_redirect, $cmsmasters_project_link_url);
						
						handmade_shop_get_project_category(get_the_ID(), 'pj-categs', 'page');
						
					echo '</div>';
					
					handmade_shop_slider_post_heading(get_the_ID(), 'project', 'h3', $cmsmasters_project_link_redirect, $cmsmasters_project_link_url, true, $cmsmasters_project_link_target);
					
				echo '</div>';
				
			endwhile;
			
			echo '</div>' . 
			wp_kses_post($after_widget);
        }
		
		wp_reset_postdata();
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['type'] = $new_instance['type'];
        $instance['number'] = absint($new_instance['number']);
		
		$instance['autoplay'] = 0;
		
		if ($new_instance['autoplay']) {
			$instance['autoplay'] = 1;
		}
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $type = isset($instance['type']) ? esc_attr($instance['type']) : '';
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
		$instance = wp_parse_args((array) $instance, array( 
			'autoplay' => false 
		) );
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('type')); ?>"><?php esc_html_e('Show Only from Projects Type', 'handmade-shop'); ?>:<br />
                <select id="<?php echo esc_attr($this->get_field_id('type')); ?>" name="<?php echo esc_attr($this->get_field_name('type')); ?>" class="widefat">
                    <option value=""><?php esc_html_e('Show all projects', 'handmade-shop'); ?>&nbsp;</option>
				<?php 
					$pj_categs = get_terms('pj-categs', 'orderby=name&hide_empty=0');
					
					if (sizeof($pj_categs) > 0) {
						foreach($pj_categs as $pj_categ) {
							if ($type == $pj_categ->slug) {
								echo '<option value="' . esc_attr($pj_categ->slug) . '" selected="selected">' . esc_html($pj_categ->name) . '&nbsp;</option>';
							} else {
								echo '<option value="' . esc_attr($pj_categ->slug) . '">' . esc_html($pj_categ->name) . '&nbsp;</option>';
							}
						}
					}
				?>
                </select>
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e("Enter the number of popular projects you'd like to display", 'handmade-shop'); ?>:<br /><br />
                <input id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" />
                <small class="s_red"><?php esc_html_e('default is', 'handmade-shop'); ?> 3</small><br />
            </label>
        </p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['autoplay'], true); ?> id="<?php echo esc_attr($this->get_field_id('autoplay')); ?>" name="<?php echo esc_attr($this->get_field_name('autoplay')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('autoplay')); ?>"><?php esc_html_e('Autoplay', 'handmade-shop'); ?></label>
		</p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Posts Tabs Widget Class
 */
class WP_Widget_Custom_Posts_Tabs extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_posts_tabs_entries', 
			'description' => 	esc_attr__('Latest, popular posts & recent comments', 'handmade-shop') 
		);
		
		parent::__construct('custom-posts-tabs', esc_attr__('Posts Tabs', 'handmade-shop'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
		$latest = isset($instance['latest']) ? $instance['latest'] : true;
		$popular = isset($instance['popular']) ? $instance['popular'] : true;
		$recent = isset($instance['recent']) ? $instance['recent'] : true;
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
		
		echo wp_kses_post($before_widget);
		
		if ($title) { 
			echo wp_kses_post($before_title . esc_html($title) . $after_title);
		}

		if ($latest) {
            $latest_query = new WP_Query(array( 
                'posts_per_page' =>         $number, 
                'post_status' =>             'publish', 
                'ignore_sticky_posts' =>     1, 
                'post_type' =>                 'post' 
            ));
            
            
            $latest = $latest_query->have_posts() ? true : false;
		}
		
		if ($popular) {
			$popular_query = new WP_Query(array( 
				'posts_per_page' => 		$number, 
				'post_status' => 			'publish', 
				'ignore_sticky_posts' => 	1, 
				'post_type' => 				'post', 
				'order' => 					'DESC', 
				'orderby' => 				'meta_value_num', 
				'meta_key' => 				'cmsmasters_likes' 
			));


			$popular = $popular_query->have_posts() ? true : false;
		}

		if ($recent) {
			$rcomments = get_comments(array( 
				'number' => 	$number, 
				'post_type' => 	'post', 
				'status' => 	'approve' 
			));

			$recent = ($rcomments && !empty($rcomments)) ? true : false;
		}
		
		echo '<div class="cmsmasters_tabs tabs_mode_tab lpr">' . 
				'<ul class="cmsmasters_tabs_list">';
		
		if ($latest) {
			echo '<li class="cmsmasters_tabs_list_item current_tab">' . 
				'<a href="#"><span>' . esc_html__('Latest', 'handmade-shop') . '</span></a>' . 
			'</li>'; 
		}
		
		if ($popular) {
			echo '<li class="cmsmasters_tabs_list_item' . ((!$latest) ? ' current_tab' : '') . '">' . 
				'<a href="#"><span>' . esc_html__('Popular', 'handmade-shop') . '</span></a>' . 
			'</li>'; 
		}
		
		if ($recent) {
			echo '<li class="cmsmasters_tabs_list_item' . ((!$latest && !$popular) ? ' current_tab' : '') . '">' . 
				'<a href="#"><span>' . esc_html__('Comments', 'handmade-shop') . '</span></a>' . 
			'</li>'; 
		}
		
		if (!$latest && !$popular && !$recent) {
			echo '<li class="cmsmasters_tabs_list_item">' . 
				'<a href="#"><span>' . esc_html__('Latest', 'handmade-shop') . '</span></a>' . 
			'</li>'; 
		}
		
		echo '</ul>' . 
		'<div class="cmsmasters_tabs_wrap">';
		
		$pt_format = get_post_format();
		
		$widget_icon = 'cmsmasters_theme_icon_image';
		
		if ($latest) {
			echo '<div class="cmsmasters_tab tab_latest">' . 
				'<ul>';
			
			while ($latest_query->have_posts()) : $latest_query->the_post();
				
				$attachments = get_children(array(
					'post_type' => 			'attachment', 
					'post_mime_type' => 	'image', 
					'post_parent' => 		get_the_ID(), 
					'orderby' => 			'menu_order', 
					'order' => 				'ASC' 
				));
				
				
				echo '<li>';
				
				if ($pt_format == 'image' || $pt_format == 'gallery') {
					echo '<div class="cmsmasters_lpr_tabs_img">';
					
					if (has_post_thumbnail()) {
						handmade_shop_thumb(get_the_ID(), 'cmsmasters-small-thumb', true, false, false, false, false, true, false);
					} elseif (!has_post_thumbnail() && sizeof($attachments) > 0) {
						if (isset($att_counter)) {
							unset($att_counter);
						}
						
						foreach ($attachments as $attachment) { 
							if (!isset($att_counter) && $att_counter = true) { 
								handmade_shop_thumb(get_the_ID(), 'cmsmasters-small-thumb', true, false, false, false, false, true, $attachment->ID);
							}
						}
					} else {
						echo '<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsmasters_title(get_the_ID(), false) . '">' . 
								'<span class="img_placeholder_small ' . $widget_icon . '"></span>' . 
							'</a>';
					}
					
					echo '</div>';
				} else {
					echo '<div class="cmsmasters_lpr_tabs_img">';
					
					if (has_post_thumbnail()) {
						handmade_shop_thumb(get_the_ID(), 'cmsmasters-small-thumb', true, false, false, false, false, true, false);
					} else {
						echo '<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsmasters_title(get_the_ID(), false) . '">' . 
								'<span class="img_placeholder_small ' . $widget_icon . '"></span>' . 
							'</a>';
					}
					
					echo '</div>';
				}
				
					echo '<div class="cmsmasters_lpr_tabs_cont">' . 
						'<a href="' . esc_url(get_permalink()) . '" title="' . cmsmasters_title(get_the_ID(), false) . '">' . cmsmasters_title(get_the_ID(), false) . '</a>' . 
						'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
							esc_html__('on', 'handmade-shop') . ' ' . 
							esc_html(get_the_date()) . 
						'</abbr>' . 
					'</div>' . 
				'</li>';
			endwhile;
			
			wp_reset_postdata();

			echo '</ul>' . 
			'</div>';
		}
		
		if ($popular) {
			echo '<div class="cmsmasters_tab tab_popular">' . 
				'<ul>';
			
			while ($popular_query->have_posts()) : $popular_query->the_post();
				$pt_format = get_post_format();
				
				$attachments = get_children(array(
					'post_type' => 			'attachment', 
					'post_mime_type' => 	'image', 
					'post_parent' => 		get_the_ID(), 
					'orderby' => 			'menu_order', 
					'order' => 				'ASC' 
				));
				
				echo '<li>';
				
				if ($pt_format == 'image' || $pt_format == 'gallery') {
					echo '<div class="cmsmasters_lpr_tabs_img">';
					
					if (has_post_thumbnail()) {
						handmade_shop_thumb(get_the_ID(), 'cmsmasters-small-thumb', true, false, false, false, false, true, false);
					} elseif (!has_post_thumbnail() && sizeof($attachments) > 0) {
						if (isset($att_counter)) {
							unset($att_counter);
						}
						
						foreach ($attachments as $attachment) { 
							if (!isset($att_counter) && $att_counter = true) { 
								handmade_shop_thumb(get_the_ID(), 'cmsmasters-small-thumb', true, false, false, false, false, true, $attachment->ID);
							}
						}
					} else {
						echo '<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsmasters_title(get_the_ID(), false) . '">' . 
								'<span class="img_placeholder_small ' . $widget_icon . '"></span>' . 
							'</a>';
					}
					
					echo '</div>';
				} else {
					echo '<div class="cmsmasters_lpr_tabs_img">';
					
					if (has_post_thumbnail()) {
						handmade_shop_thumb(get_the_ID(), 'cmsmasters-small-thumb', true, false, false, false, false, true, false);
					} else {
						echo '<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsmasters_title(get_the_ID(), false) . '">' . 
								'<span class="img_placeholder_small ' . $widget_icon . '"></span>' . 
							'</a>';
					}
					
					echo '</div>';
				}
				
					echo '<div class="cmsmasters_lpr_tabs_cont">' . 
						'<a href="' . esc_url(get_permalink()) . '" title="' . cmsmasters_title(get_the_ID(), false) . '">' . cmsmasters_title(get_the_ID(), false) . '</a>' . 
						'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
							esc_html__('on', 'handmade-shop') . ' ' . 
							esc_html(get_the_date()) . 
						'</abbr>' . 
					'</div>' . 
				'</li>';
			endwhile;

			wp_reset_postdata();
			
			echo '</ul>' . 
			'</div>';
		}
		
		if ($recent) {
			echo '<div class="cmsmasters_tab tab_comments">' . 
				'<ul>';
			
			foreach ($rcomments as $comment) {
				$comment_post_ID = $comment->comment_post_ID;
				$comment_author = $comment->comment_author;
				$comment_author_url = $comment->comment_author_url;
				$comment_date = mysql2date('U', $comment->comment_date, false);
				$comment_content = $comment->comment_content;
				$comment_array = explode(' ', $comment_content);
				
				if (sizeof($comment_array) > 10) {
					$new_comment_content = '';
					
					for ($i = 0; $i < 10; $i++) {
						$new_comment_content .= $comment_array[$i] . ' ';
					}
					
					$new_comment_content = trim($new_comment_content) . '...';
				} else {
					$new_comment_content = $comment_content;
				}
				
				echo '<li>' . 
					(($comment_author_url != '') ? '<a href="' . esc_url($comment_author_url) . '" title="' . esc_attr($comment_author_url) . '" target="_blank">' : '') . $comment_author . (($comment_author_url != '') ? '</a>' : '') . 
					' <span>' . esc_html__('on', 'handmade-shop') . '</span> <a href="' . get_permalink($comment_post_ID) . '#comments" rel="bookmark">' . cmsmasters_title($comment_post_ID, false) . '</a>' . 
					'<small>' . 
						'<abbr class="published" title="' . esc_attr(get_the_time('d-m-Y')) . '">' . human_time_diff($comment_date, current_time('timestamp')) . ' ' . esc_html__('ago', 'handmade-shop') . '</abbr>' . 
					'</small>' . 
					'<p>' . esc_html($new_comment_content) . '</p>' . 
				'</li>';
			}
			
			echo '</ul>' . 
			'</div>';
		}
		
		echo '</div>' . 
			'</div>' .
		wp_kses_post($after_widget);
	}
	
	function update($new_instance, $old_instance) {
		$new_instance = (array) $new_instance;
		
		$instance['latest'] = 0;
		$instance['popular'] = 0;
		$instance['recent'] = 0;
		
		if ( $new_instance['latest'] ) {
			$instance['latest'] = 1;
		}
		
		if ( $new_instance['popular'] ) {
			$instance['popular'] = 1;
		}
		
		if ( $new_instance['recent'] ) {
			$instance['recent'] = 1;
		}
		
		if ($new_instance['latest'] == '' && $instance['popular'] == '' && $instance['recent'] == '') {
			$instance['latest'] = 1;
		}
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = absint($new_instance['number']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		$instance = wp_parse_args((array) $instance, array( 
			'latest' => true, 
			'popular' => true, 
			'recent' => true 
		) );
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['latest'], true); ?> id="<?php echo esc_attr($this->get_field_id('latest')); ?>" name="<?php echo esc_attr($this->get_field_name('latest')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('latest')); ?>"><?php esc_html_e('Latest Posts', 'handmade-shop'); ?></label>
		</p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['popular'], true); ?> id="<?php echo esc_attr($this->get_field_id('popular')); ?>" name="<?php echo esc_attr($this->get_field_name('popular')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('popular')); ?>"><?php esc_html_e('Popular Posts', 'handmade-shop'); ?></label>
		</p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['recent'], true); ?> id="<?php echo esc_attr($this->get_field_id('recent')); ?>" name="<?php echo esc_attr($this->get_field_name('recent')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('recent')); ?>"><?php esc_html_e('Recent Comments', 'handmade-shop'); ?></label>
		</p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e("Enter the number of recent comments, popular and latest posts you\'d like to display", 'handmade-shop'); ?>:<br /><br />
                <input id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" />
                <small class="s_red"><?php esc_html_e('default is', 'handmade-shop'); ?> 3</small><br />
            </label>
        </p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Twitter Widget Class
 */
class WP_Widget_Custom_Twitter extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_twitter_entries', 
			'description' => 	esc_attr__('Your Twitter account recent tweet', 'handmade-shop') 
		);
		
		parent::__construct('custom-twitter', esc_attr__('Twitter', 'handmade-shop'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('Twitter', 'handmade-shop') : $instance['title'], $instance, $this->id_base);
		
		echo wp_kses_post($before_widget);
		
		if ($title) { 
			echo wp_kses_post($before_title . esc_html($title) . $after_title);
		}
		
		$tweets = cmsmasters_get_tweets();
		
		if (!empty($tweets)) {
			echo '<ul class="tweet_list">';
			
			foreach ($tweets as $t) {
				echo '<li>' . "\n" . 
					'<span class="tweet_time cmsmasters_theme_icon_user_twitter">' . human_time_diff($t['time'], current_time('timestamp')) . ' ' . esc_html__('ago', 'handmade-shop') . '</span>' . "\n" . 
					'<span class="tweet_text">' . "\n" . $t['text'] . '</span>' . "\n" . 
				'</li>' . "\n";
			}

			echo '</ul>';
		} else {
			echo '<div class="cmsmasters_notice cmsmasters_notice_error cmsmasters_theme_icon_cancel">' . "\n" . 
				'<div class="notice_content">' . "\n" . 
					'<p>' . esc_html__('Please add your Twitter API keys', 'handmade-shop') . ', ' . '<a target="_blank" href="//cmsmasters.net/twitter-functionality/">' . esc_html__('read more how', 'handmade-shop') . '</a></p>' . "\n" . 
				'</div>' . "\n" . 
			'</div>' . "\n";
		}
		
		echo wp_kses_post($after_widget);
	}
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <div class="cl"></div>
        <?php
    }
}


/**
 * Profile Widget Class
 */
class WP_Widget_Custom_Profile extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_profile', 
			'description' => 	esc_html__('Your info from profiles', 'handmade-shop') 
		);
		
		parent::__construct('custom-profile', esc_attr__('Profile', 'handmade-shop'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? esc_attr__('About Author', 'handmade-shop') : $instance['title'], $instance, $this->id_base);
		$id = isset($instance['id']) ? $instance['id'] : '';
		$image = isset($instance['image']) ? $instance['image'] : true;
		$name = isset($instance['name']) ? $instance['name'] : true;
        $excerpt = isset($instance['excerpt']) ? ($instance['excerpt']) : true;
        $social = isset($instance['social']) ? ($instance['social']) : true;
		
		
		echo wp_kses_post($before_widget);
		
		if ($title) { 
			echo wp_kses_post($before_title . esc_html($title) . $after_title);
		}
		
		if ($id != '') {
			$cmsmasters_profile_social = get_post_meta($id, 'cmsmasters_profile_social', true);
			
			$cmsmasters_profile_subtitle = get_post_meta($id, 'cmsmasters_profile_subtitle', true);
			
			$cmsmasters_profile_thumb = get_the_post_thumbnail($id, 'cmsmasters-profile-thumb');
			
			
			if ($image != '' && $cmsmasters_profile_thumb != '') { 
				echo '<figure class="cmsmasters_img_wrap">' . 
					'<a href="' . esc_url(get_permalink($id)) . '">' . 
						get_the_post_thumbnail($id, 'cmsmasters-profile-thumb') . 
					'</a>' . 
				'</figure>';
			}
			
			
			if ($name != '') { 
				echo '<h3 class="cmsmasters_profile_title entry-title">' . 
					'<a href="' . esc_url(get_permalink($id)) . '">' . get_the_title($id) . '</a>' . 
				'</h3>';
			}
			
			
			if ($excerpt != '') { 
				echo '<div class="cmsmasters_profile_content entry-content">' . get_the_excerpt($id) . '</div>';
			}
			
			
			if ($social != '') { 
				handmade_shop_profile_social_icons($cmsmasters_profile_social);
			}
		}
		
        echo wp_kses_post($after_widget);
    }
	
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		
		$instance = array( 
			'image' => 0, 
			'name' => 0, 
			'excerpt' => 0, 
			'social' => 0 
		);
		
		foreach ($instance as $field => $val) {
			if (isset($new_instance[$field])) {
				$instance[$field] = 1;
			}
		}
		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['id'] = strip_tags($new_instance['id']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $id = isset($instance['id']) ? esc_attr($instance['id']) : '';
		$instance = wp_parse_args((array) $instance, array( 
			'image' => true, 
			'name' => true, 
			'excerpt' => true, 
			'social' => true 
		) );
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('id')); ?>"><?php esc_html_e('Choose Profile to display', 'handmade-shop'); ?>:<br />
                <select id="<?php echo esc_attr($this->get_field_id('id')); ?>" name="<?php echo esc_attr($this->get_field_name('id')); ?>" class="widefat">
                    <option value=""><?php esc_html_e('Choose...', 'handmade-shop'); ?>&nbsp;</option>
				<?php 
					$queryArgs = array( 
						'posts_per_page' => 		-1, 
						'post_status' => 			'publish', 
						'post_type' => 				'profile', 
						'order' => 					'ASC', 
						'orderby' => 				'name'
					);
					
					$profiles = get_posts($queryArgs);
					
					foreach($profiles as $key=>$profile){
						if ($id == $profile->ID) {
							echo '<option value="' . esc_attr($profile->ID) . '" selected="selected">' . $profile->post_title . '&nbsp;</option>';
						} else {
							echo '<option value="' . esc_attr($profile->ID) . '">' . $profile->post_title . '&nbsp;</option>';
						}
					}
				?>
                </select>
            </label>
		</p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['image'], true); ?> id="<?php echo esc_attr($this->get_field_id('image')); ?>" name="<?php echo esc_attr($this->get_field_name('image')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('image')); ?>"><?php esc_html_e('Profile Featured Image', 'handmade-shop'); ?></label>
		</p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['name'], true); ?> id="<?php echo esc_attr($this->get_field_id('name')); ?>" name="<?php echo esc_attr($this->get_field_name('name')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('name')); ?>"><?php esc_html_e('Profile Name', 'handmade-shop'); ?></label>
		</p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['excerpt'], true); ?> id="<?php echo esc_attr($this->get_field_id('excerpt')); ?>" name="<?php echo esc_attr($this->get_field_name('excerpt')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('excerpt')); ?>"><?php esc_html_e('Profile Excerpt', 'handmade-shop'); ?></label>
		</p>
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['social'], true); ?> id="<?php echo esc_attr($this->get_field_id('social')); ?>" name="<?php echo esc_attr($this->get_field_name('social')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('social')); ?>"><?php esc_html_e('Profile Social Icons', 'handmade-shop'); ?></label>
		</p>
        <?php
    }
}


/**
 * Lates Posts Widget Class
 */
class WP_Widget_Custom_Latest_Posts extends WP_Widget {
	function __construct() {
		$widget_ops = array( 
			'classname' => 		'widget_custom_latest_posts_entries', 
			'description' => 	esc_attr__('Your site\'s latest Posts.', 'handmade-shop') 
		);
		
		parent::__construct('custom-latest-posts', esc_attr__('Latest Posts', 'handmade-shop'), $widget_ops);
	}
	
	function widget($args, $instance) {
		extract($args);
		
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title'], $instance, $this->id_base);
		$number = isset($instance['number']) ? (int) $instance['number'] : '';
		
        if (empty($instance['number']) || !$number = absint($instance['number'])) {
            $number = 3;
        } elseif ($number < 1) {
            $number = 1;
        } elseif ($number > 15) {
            $number = 15;
        }
		
		echo wp_kses_post($before_widget);
		
		if ($title) { 
			echo wp_kses_post($before_title . esc_html($title) . $after_title);
		}
		
		$pt_format = get_post_format();
		
		$widget_icon = 'cmsmasters_theme_icon_image';
		
		$l = new WP_Query(array( 
			'posts_per_page' => 		$number, 
			'post_status' => 			'publish', 
			'ignore_sticky_posts' => 	1, 
			'post_type' => 				'post' 
		));
		
		if ($l->have_posts()) { 
			echo '<ul class="cmsmasters_latest_posts_list">';
			
			while ($l->have_posts()) : $l->the_post();
				
				$attachments = get_children(array(
					'post_type' => 			'attachment', 
					'post_mime_type' => 	'image', 
					'post_parent' => 		get_the_ID(), 
					'orderby' => 			'menu_order', 
					'order' => 				'ASC' 
				));
				
				
				echo '<li>';
				
				if ($pt_format == 'image' || $pt_format == 'gallery') {
					echo '<div class="cmsmasters_latest_posts_img">';
					
					if (has_post_thumbnail()) {
						handmade_shop_thumb(get_the_ID(), 'cmsmasters-small-thumb', true, false, false, false, false, true, false);
					} elseif (!has_post_thumbnail() && sizeof($attachments) > 0) {
						if (isset($att_counter)) {
							unset($att_counter);
						}
						
						foreach ($attachments as $attachment) { 
							if (!isset($att_counter) && $att_counter = true) { 
								handmade_shop_thumb(get_the_ID(), 'cmsmasters-small-thumb', true, false, false, false, false, true, $attachment->ID);
							}
						}
					} else {
						echo '<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsmasters_title(get_the_ID(), false) . '">' . 
								'<span class="img_placeholder_small ' . $widget_icon . '"></span>' . 
							'</a>';
					}
					
					echo '</div>';
				} else {
					echo '<div class="cmsmasters_latest_posts_img">';
					
					if (has_post_thumbnail()) {
						handmade_shop_thumb(get_the_ID(), 'cmsmasters-small-thumb', true, false, false, false, false, true, false);
					} else {
						echo '<a href="' . esc_url(get_permalink()) . '"' . ' title="' . cmsmasters_title(get_the_ID(), false) . '">' . 
								'<span class="img_placeholder_small ' . $widget_icon . '"></span>' . 
							'</a>';
					}
					
					echo '</div>';
				}
				
					echo '<div class="cmsmasters_latest_posts_cont">' . 
						'<a href="' . esc_url(get_permalink()) . '" title="' . cmsmasters_title(get_the_ID(), false) . '">' . cmsmasters_title(get_the_ID(), false) . '</a>' . 
						'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
							esc_html__('on', 'handmade-shop') . ' ' . 
							esc_html(get_the_date()) . 
						'</abbr>' . 
					'</div>' . 
				'</li>';
			endwhile;
			
			echo '</ul>';
		}
		
		wp_reset_postdata();
		
		
		echo wp_kses_post($after_widget);
	}
	
	function update($new_instance, $old_instance) {
		$new_instance = (array) $new_instance;
		
		$instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = absint($new_instance['number']);
		
		return $instance;
	}
	
    function form($instance) {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $number = (isset($instance['number']) && $instance['number'] != 0) ? absint($instance['number']) : 3;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title', 'handmade-shop'); ?>:<br />
                <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
            </label>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e("Enter the number of latest posts you'd like to display", 'handmade-shop'); ?>:<br /><br />
                <input id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="text" value="<?php echo esc_attr($number); ?>" size="3" />
                <small class="s_red"><?php esc_html_e('default is', 'handmade-shop'); ?> 3</small><br />
            </label>
        </p>
        <div class="cl"></div>
        <?php
    }
}

function handmade_shop_theme_add_custom_widgets($widgets) {
	$widgets[] = 'WP_Widget_Custom_Contact_Info';
	
	$widgets[] = 'WP_Widget_Custom_Posts_Tabs';
	
	$widgets[] = 'WP_Widget_Custom_Twitter';
	
	$widgets[] = 'WP_Widget_Custom_Profile';
	
	$widgets[] = 'WP_Widget_Custom_Latest_Posts';
	
	return $widgets;
}

add_filter('cmsmasters_custom_widgets_filter', 'handmade_shop_theme_add_custom_widgets');