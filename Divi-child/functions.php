<?php
add_action( 'wp_enqueue_scripts', 'bk_enqueue_styles' );
function bk_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_filter('widget_text', 'do_shortcode');
