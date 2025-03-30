<?php
function slick_gallery_acf_shortcode($atts)
{
    $atts = shortcode_atts(array(
        'pageid' => get_the_ID(),
    ), $atts);

    $page_id = intval($atts['pageid']);
    $gallery_images = get_field('gallery_images', $page_id);

    if (empty($gallery_images)) {
        return '<p>No images found.</p>';
    }

    ob_start();
?>
    <div class="gallery-slider">
        <?php for ($i = 0; $i < count($gallery_images); $i += 5) : ?>
            <?php if (isset($gallery_images[$i]['image']['url'])) : ?>
                <div class="gallery-item">
                    <a href="<?php echo esc_url($gallery_images[$i]['image']['url']); ?>" data-fancybox="gallery-slicks">
                        <img src="<?php echo esc_url($gallery_images[$i]['image']['url']); ?>" alt="<?php echo esc_attr($gallery_images[$i]['image']['alt']); ?>">
                    </a>
                </div>
            <?php endif; ?>

            <div class="gallery-item group">
                <?php
                for ($j = 1; $j <= 4; $j++) :
                    if (isset($gallery_images[$i + $j]['image']['url'])) : ?>
                        <div class="gallery-small">
                            <a href="<?php echo esc_url($gallery_images[$i + $j]['image']['url']); ?>" data-fancybox="gallery-slicks">
                                <img src="<?php echo esc_url($gallery_images[$i + $j]['image']['url']); ?>" alt="<?php echo esc_attr($gallery_images[$i + $j]['image']['alt']); ?>">
                            </a>
                        </div>
                <?php endif;
                endfor; ?>
            </div>
        <?php endfor; ?>
    </div>

<?php
    return ob_get_clean();
}
add_shortcode('acf_slick_gallery', 'slick_gallery_acf_shortcode');


function enqueue_slick_and_fancybox()
{
    wp_enqueue_style('slick-slider-css', THEME_URL . '-child' . '/assets/lib/slick/slick.css');
    wp_enqueue_style('slick-theme-css', THEME_URL . '-child' . '/assets/lib/slick/slick-theme.css');
    // Enqueue FancyBox
    wp_enqueue_style('fancybox-css', THEME_URL . '-child' . '/assets/lib/fancybox/jquery.fancybox.min.css');

}
add_action('wp_enqueue_scripts', 'enqueue_slick_and_fancybox');
