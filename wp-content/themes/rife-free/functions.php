<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

/* Here you can insert your functions, filters and actions. */




function cptui_register_my_cpts() {

	/**
	 * Post Type: locations.
	 */

	$labels = [
		"name" => __( "locations", "rife-free" ),
		"singular_name" => __( "location", "rife-free" ),
	];

	$args = [
		"label" => __( "locations", "rife-free" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "location", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "location", $args );
}

add_action( 'init', 'add_gallery_post_type' );
function add_gallery_post_type() {
    register_post_type( 'zm_gallery',
            array(
                'labels' => array(
                                'name' => __( 'Gallery' ),
                                'singular_name' => __( 'Gallery' ),
                                'all_items' => __( 'All Images')
                            ),
                'public' => true,
                'has_archive' => false,
                'exclude_from_search' => true,
                'rewrite' => array('slug' => 'gallery-item'),
                'supports' => array( 'title', 'thumbnail' ),
                'menu_position' => 4,
                'show_in_admin_bar'   => false,
                'show_in_nav_menus'   => false,
                'publicly_queryable'  => false,
                'query_var'           => false
            )
    );
}

add_action( 'init', 'cptui_register_my_cpts' );



/* That's all, stop editing! Make a great website!. */

/* Init of the framework */

/* This function exist in WP 4.7 and above.
 * Theme has protection from runing it on version below 4.7
 * However, it has to at least run, to give user info about having not compatible WP version :-)
 */
if( function_exists('get_theme_file_path') ){
	/** @noinspection PhpIncludeInspection */
	require_once( get_theme_file_path( '/advance/class-apollo13-framework.php' ) );
}
else{
	/** @noinspection PhpIncludeInspection */
	require_once( get_template_directory() . '/advance/class-apollo13-framework.php' );
}

global $apollo13framework_a13;
$apollo13framework_a13 = new Apollo13Framework();
$apollo13framework_a13->start();
