<?php 
/**
 * @package 	WordPress
 * @subpackage 	Handmade Shop
 * @version 	1.0.8
 * 
 * Custom Single Comment Template
 * Created by CMSMasters
 * 
 */


function handmade_shop_mytheme_comment($comment, $args, $depth) {
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>" class="comment-body cmsmasters_comment_item">
			<figure class="cmsmasters_comment_item_avatar">
				<?php echo get_avatar($comment->comment_author_email, 70, get_option('avatar_default')) . "\n"; ?>
			</figure>
			<div class="comment-content cmsmasters_comment_item_cont">
				<div class="cmsmasters_comment_item_header">
					<h3 class="fn cmsmasters_comment_item_title"><?php echo get_comment_author_link(); ?></h3>
					<?php 
					echo '<abbr class="published cmsmasters_comment_item_date" title="' . get_comment_date() . '">' . 
						esc_html__('on', 'handmade-shop') . ' ' . get_comment_date() . 
					'</abbr>';
					?>
				</div>
				<div class="cmsmasters_comment_item_cont_info">
					<?php 
					comment_reply_link(array_merge($args, array( 
						'depth' => $depth, 
						'max_depth' => $args['max_depth'], 
						'reply_text' => esc_attr__('Reply', 'handmade-shop') 
					)));
					
					
					edit_comment_link(esc_attr__('Edit', 'handmade-shop'), '', '');
					?>
				</div>
				<div class="cmsmasters_comment_item_content">
					<?php 
					comment_text();
					
					if ($comment->comment_approved == '0') {
						echo '<p>' . 
							'<em>' . esc_html__('Your comment is awaiting moderation.', 'handmade-shop') . '</em>' . 
						'</p>';
					}
					?>
				</div>
			</div>
        </div>
    <?php 
}

