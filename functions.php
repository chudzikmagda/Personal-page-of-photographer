<?php
 // add css style, js script
 wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,600;1,400&display=swap', false ); 
wp_enqueue_style('style', get_stylesheet_uri(), []);
wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array ( ), 1.0, true);
// aos
wp_enqueue_style( 'aos-css', get_template_directory_uri() . '/aos/aos.css',false,'1.1','all');
wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/aos/aos.js', array ( ), 4.4, true);

// register menu
function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Header Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

//add post image
function ad_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'ad_post_thumbnails');

//remove auto <p> tag in paragraph
remove_filter('the_content', 'wpautop'); 
remove_filter('the_excerpt', 'wpautop');

// add widgets
if (function_exists('register_sidebar'))
  register_sidebar(array(
    'name' => 'Name of Widgetized Area',
    'before_widget' => '<div class = "container-fluid">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  )
);

// add alt tag to featured image
function add_alt_tile_to_images($attr, $attachment = null) {
    $img_title = trim(strip_tags($attachment->post_title));

    if (empty($attr['alt'])) {
        $attr['alt'] = $img_title;
        $attr['title'] = $img_title;
    }
    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'add_alt_tile_to_images', 10, 2);