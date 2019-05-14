<?php
/* This is a action hook, it tells wordpress to run the funtion below
 * at a specific time (during `wp_enqueue_scripts`). It adds the necessary 
 * CSS to the '<head>'-tag. Noneed to edit this code */
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

/*
  Another action hook, it adds a custom post type called "project"
*/
add_action( 'init', 'add_custom_post_types');

function add_custom_post_types() {
  $labels = array(
    'name'               => _x( 'Projects', 'post type general name' ),
    'singular_name'      => _x( 'Projects', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Project' ),
    'edit_item'          => __( 'Edit Project' ),
    'new_item'           => __( 'New Project' ),
    'all_items'          => __( 'All Projects' ),
    'view_item'          => __( 'View Project' ),
    'search_items'       => __( 'Search Projects' ),
    'not_found'          => __( 'No Projects found' ),
    'not_found_in_trash' => __( 'No Projects found in the Trash' ), 
    'menu_name'          => 'Projects'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our Projects and Project specific data',
    'public'        => true,
    /* This is important, it makes it so that we can add custom archive pages */
    'has_archive'   => true,
    /* the next one is important, it tells what's enabled in the post editor */
    'supports' => array( 'title', 'editor', 'author', 'comments', 'thumbnail'),
  );
  register_post_type('project', $args);
}

// Support for themes
add_theme_support( 'post-thumbnails' );
?>