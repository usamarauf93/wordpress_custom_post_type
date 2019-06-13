<?php
/*----------------- StyleSheet Links --------------*/

function wp_theme_scripts() {

  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap.css');
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'datepicker', get_template_directory_uri() . '/assets/fonts-roboto.css');
  wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/fonts-base64.css');

}

add_action( 'wp_enqueue_scripts', 'wp_theme_scripts' );



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

