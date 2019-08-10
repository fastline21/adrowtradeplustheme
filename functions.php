<?php
function adrowtradeplustheme_resources() {
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js');
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
    wp_enqueue_script('script', get_template_directory_uri() . '/script.js');
}
add_action('wp_enqueue_scripts', 'adrowtradeplustheme_resources');

function add_favicon() {
    echo '<link rel="shortcut icon" type="image/png" href="' . get_template_directory_uri() . '/assets/favicon.ico" />';
}
add_action('wp_head', 'add_favicon');

function thumb_default() {
    if (has_post_thumbnail()) {
        ?>
        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" />
        <?php  
    } else {
        ?>
        <img class="img-fluid" src="<?php echo get_template_directory_uri() . '/assets/default_thumb_img.png' ?>" />
        <?php
    }
}

function adrowtradeplus_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'adrowtradeplus_setup');