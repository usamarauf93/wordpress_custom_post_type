<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


/**
 * Custom Post Type
 */
/* Custom Post Type Start */
function create_posttype() {
    register_post_type( 'cars',
    // CPT Options
    array(
      'labels' => array(
       'name' => __( 'cars' ),
       'singular_name' => __( 'cars' )
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'Cars'),
     )
    );
    }
    // Hooking up our function to theme setup
    add_action( 'init', 'create_posttype' );
    /* Custom Post Type End */


    add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
 
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'cars' ) );
    return $query;
}
?>

