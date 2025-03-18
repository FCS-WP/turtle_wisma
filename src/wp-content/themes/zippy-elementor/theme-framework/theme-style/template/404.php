<?php
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.1.0
 * 
 * 404 Error Page Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = handmade_shop_get_global_options();

?>

</div>

<!--  Start Content  -->
<div class="entry">
	<div class="error">
		<div class="error_bg">
			<div class="content_wrap fullwidth">
				<div class="error_inner">
					<h1 class="error_title"><?php echo esc_html__("404 - Page not Found!", 'handmade-shop'); ?></h1>
					<div class="error_subtitle"><?php echo esc_html__("The page you trying to reach does not exist, or has been moved. Please use the menus or the search box below to find what you are looking for.", 'handmade-shop'); ?></div>
				</div>
				<div class="error_cont">
					<?php 
					if ($cmsmasters_option['handmade-shop' . '_error_search']) { 
						get_search_form(); 
					}
					
					
					if ($cmsmasters_option['handmade-shop' . '_error_sitemap_button'] && $cmsmasters_option['handmade-shop' . '_error_sitemap_link'] != '') {
						echo '<div class="error_button_wrap"><a href="' . esc_url($cmsmasters_option['handmade-shop' . '_error_sitemap_link']) . '" class="button">' . esc_html__('Sitemap', 'handmade-shop') . '</a></div>';
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="content_wrap fullwidth">
<!--  Finish Content  -->