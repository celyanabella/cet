<?php
/**
 * Fastfood functions and definitions
 */

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );

add_image_size( 'fastfood-featured-image', 2000, 1200, true );

add_image_size( 'fastfood-thumbnail-avatar', 100, 100, true );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
	'top'    => __( 'Top Menu', 'fastfood' ),
	'footer' => __( 'Footer Menu', 'fastfood' ),
) );

/*
 * Add classes to main menu
 */
function fastfood_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'top' || $args->theme_location == 'footer') {
    $classes[] = 'list-inline-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class','fastfood_menu_classes',1,3);

/*
 * Define custom post type
 * Register post types: https://codex.wordpress.org/Function_Reference/register_post_type
 * Icons: https://developer.wordpress.org/resource/dashicons/
 */
 function fastfood_post_type() {
 	register_post_type( 'fastfood_slider',
 		array(
	      'labels' => array(
	        'name' => __( 'Carousel' ),
	        'singular_name' => __( 'Item' ),
	        'add_new' => __( 'Nuevo item' ),
	        'add_new_item' => __( 'Añadir nuevo item' ),
	        'edit_item' => __( 'Editar item' ),
	        'featured_image' => __( 'Imagen del slide' )
	      ),
	      'public' => true,
	      'exclude_from_search' => true,
	      'has_archive' => false,
	      'show_in_nav_menus' => false,
	      'menu_icon' => 'dashicons-slides',
	      //'rewrite' => array('slug' => 'carousel'),
	      'supports' => array('title', 'editor', 'thumbnail')

    	)
  	);
 }
 add_action( 'init', 'fastfood_post_type' );

 /*
 * Define shortcodes
 * https://codex.wordpress.org/Shortcode_API
 */

// Create the new shortcode [fastfood_head] with the callback fastfoodBtnFunc
add_shortcode("fastfood_headings", "fastfoodHeadingsFunc");

// Add parameters to function
function fastfoodHeadingsFunc($atts, $content = null) {
	return "<" . $atts['type'] . " class='" . $atts['class'] . "'>" . $content . "</" . $atts['type'] . ">";
}

// Create the new shortcode [fastfood_btn] with the callback fastfoodBtnFunc
add_shortcode("fastfood_btn", "fastfoodBtnFunc");

// Add parameters to function
function fastfoodBtnFunc($atts, $content = null) {
	return "<" . $atts['type'] . " class='" . $atts['class'] . "' href='" . $atts['link'] . "'>" . $content . "</" . $atts['type'] . ">";
}

// Register sidebars
add_action( 'widgets_init', 'fastfoodWidgetsInit' );

function fastfoodWidgetsInit() {
    register_sidebar( array(
        'name' => __( 'Posts sidebar', 'fastfood' ),
        'id' => 'sidebar-posts',
        'description' => __( 'Widgets in this area will be shown on all posts.', 'fastfood' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}