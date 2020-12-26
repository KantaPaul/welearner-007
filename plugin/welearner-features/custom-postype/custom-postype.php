<?php

/**
 * Register a custom post type for courses .
 *
 */
if (!function_exists('wpdocs_codex_course_init')) {
    function wpdocs_codex_course_init() {
        $labels = array(
            'name'                  => _x( 'Courses', 'Post type general name', 'welearner-features ' ),
            'singular_name'         => _x( 'Course', 'Post type singular name', 'welearner-features ' ),
            'menu_name'             => _x( 'Courses', 'Admin Menu text', 'welearner-features ' ),
            'name_admin_bar'        => _x( 'Course', 'Add New on Toolbar', 'welearner-features ' ),
            'add_new_item'          => __( 'Add New Course', 'welearner-features ' ),
            'new_item'              => __( 'New Course', 'welearner-features ' ),
            'edit_item'             => __( 'Edit Course', 'welearner-features ' ),
            'view_item'             => __( 'View Course', 'welearner-features ' ),
            'all_items'             => __( 'All Courses', 'welearner-features ' ),
            'search_items'          => __( 'Search Courses', 'welearner-features ' ),
            'parent_item_colon'     => __( 'Parent Courses:', 'welearner-features ' ),
            'not_found'             => __( 'No Courses found.', 'welearner-features ' ),
            'not_found_in_trash'    => __( 'No Courses found in Trash.', 'welearner-features ' ),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'course' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
            'menu_icon'          => 'dashicons-edit'
        );

        register_post_type( 'courses', $args );

        unset( $args );
        unset( $labels );
        // register custom postype for testimonials
        $labels = array(
            'name'                  => _x( 'Testimonials', 'Post type general name', 'welearner-features ' ),
            'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'welearner-features ' ),
            'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'welearner-features ' ),
            'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'welearner-features ' ),
            'view_item'             => __( 'View Testimonial', 'welearner-features ' ),
            'all_items'             => __( 'All Testimonial', 'welearner-features ' ),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'testimonial' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'thumbnail' ),
            'menu_icon'          => 'dashicons-testimonial'
        );
        register_post_type( 'testimonial', $args );

        unset( $args );
        unset( $labels );
        $labels = array(
            'name'                  => _x( 'Creators', 'Post type general name', 'welearner-features ' ),
            'singular_name'         => _x( 'Creator', 'Post type singular name', 'welearner-features ' ),
            'menu_name'             => _x( 'Creators', 'Admin Menu text', 'welearner-features ' ),
            'name_admin_bar'        => _x( 'Creator', 'Add New on Toolbar', 'welearner-features ' ),
            'add_new_item'          => __( 'Add New Creator', 'welearner-features ' ),
            'new_item'              => __( 'New Creator', 'welearner-features ' ),
            'edit_item'             => __( 'Edit Creator', 'welearner-features ' ),
            'view_item'             => __( 'View Creator', 'welearner-features ' ),
            'all_items'             => __( 'All Creators', 'welearner-features ' ),
            'search_items'          => __( 'Search Creators', 'welearner-features ' ),
            'parent_item_colon'     => __( 'Parent Creator:', 'welearner-features ' ),
            'not_found'             => __( 'No Creatorss found.', 'welearner-features ' ),
            'not_found_in_trash'    => __( 'No Creator found in Trash.', 'welearner-features ' ),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'creator' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'thumbnail'),
            'menu_icon'          => 'dashicons-groups'
        );

        register_post_type( 'creator', $args );

    }

    add_action( 'init', 'wpdocs_codex_course_init' );
}

//  register taxonomy for course

/**
 * @see register_post_type() for registering custom post types.
 */
if (!function_exists('welearner_create_topic_taxonomies')) {
    function welearner_create_topic_taxonomies() {
        $labels = array(
            'name'              => _x( 'Course Topics', 'taxonomy general name', 'welearner-features ' ),
            'singular_name'     => _x( 'Course Topic', 'taxonomy singular name', 'welearner-features ' ),
            'search_items'      => __( 'Search Topics', 'welearner-features ' ),
            'all_items'         => __( 'All Topics', 'welearner-features ' ),
            'parent_item'       => __( 'Parent Topic', 'welearner-features ' ),
            'parent_item_colon' => __( 'Parent Topic:', 'welearner-features ' ),
            'edit_item'         => __( 'Edit Topic', 'welearner-features ' ),
            'update_item'       => __( 'Update Topic', 'welearner-features ' ),
            'add_new_item'      => __( 'Add New Topic', 'welearner-features ' ),
            'new_item_name'     => __( 'New Topic Name', 'welearner-features ' ),
            'menu_name'         => __( 'Course Topic', 'welearner-features ' ),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'topic' ),
        );

        register_taxonomy( 'topic', array( 'courses' ), $args );


    }
    // hook into the init action and call create_book_taxonomies when it fires
    add_action( 'init', 'welearner_create_topic_taxonomies', 0 );
}