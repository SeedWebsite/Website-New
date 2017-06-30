<?php


if (is_user_logged_in()) {
    show_admin_bar(true);
}#end if

// Load the Theme JS
function theme_js() {
	wp_enqueue_script( 'animate', get_template_directory_uri() . '/wp-content/themes/seed-website/js/animate.js');
}

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 319, 214, array( 'center', 'center') );

?>