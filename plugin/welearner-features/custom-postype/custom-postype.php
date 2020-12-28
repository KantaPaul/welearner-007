<?php

/**
 * Register a custom post type for courses .
 *
 */
if (!function_exists('welearner_codex_course_init')) {
    function welearner_codex_course_init() {
        $labels = array(
            'name'                  => esc_html_x( 'Courses', 'Post type general name', 'welearner-features ' ),
            'singular_name'         => esc_html_x( 'Course', 'Post type singular name', 'welearner-features ' ),
            'menu_name'             => esc_html_x( 'Courses', 'Admin Menu text', 'welearner-features ' ),
            'name_admin_bar'        => esc_html_x( 'Course', 'Add New on Toolbar', 'welearner-features ' ),
            'add_new_item'          => esc_html__( 'Add New Course', 'welearner-features ' ),
            'new_item'              => esc_html__( 'New Course', 'welearner-features ' ),
            'edit_item'             => esc_html__( 'Edit Course', 'welearner-features ' ),
            'view_item'             => esc_html__( 'View Course', 'welearner-features ' ),
            'all_items'             => esc_html__( 'All Courses', 'welearner-features ' ),
            'search_items'          => esc_html__( 'Search Courses', 'welearner-features ' ),
            'parent_item_colon'     => esc_html__( 'Parent Courses:', 'welearner-features ' ),
            'not_found'             => esc_html__( 'No Courses found.', 'welearner-features ' ),
            'not_found_in_trash'    => esc_html__( 'No Courses found in Trash.', 'welearner-features ' ),
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
            'name'                  => esc_html_x( 'Testimonials', 'Post type general name', 'welearner-features ' ),
            'singular_name'         => esc_html_x( 'Testimonial', 'Post type singular name', 'welearner-features ' ),
            'menu_name'             => esc_html_x( 'Testimonials', 'Admin Menu text', 'welearner-features ' ),
            'name_admin_bar'        => esc_html_x( 'Testimonial', 'Add New on Toolbar', 'welearner-features ' ),
            'view_item'             => esc_html__( 'View Testimonial', 'welearner-features ' ),
            'all_items'             => esc_html__( 'All Testimonial', 'welearner-features ' ),
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
            'name'                  => esc_html_x( 'Creators', 'Post type general name', 'welearner-features ' ),
            'singular_name'         => esc_html_x( 'Creator', 'Post type singular name', 'welearner-features ' ),
            'menu_name'             => esc_html_x( 'Creators', 'Admin Menu text', 'welearner-features ' ),
            'name_admin_bar'        => esc_html_x( 'Creator', 'Add New on Toolbar', 'welearner-features ' ),
            'add_new_item'          => esc_html__( 'Add New Creator', 'welearner-features ' ),
            'new_item'              => esc_html__( 'New Creator', 'welearner-features ' ),
            'edit_item'             => esc_html__( 'Edit Creator', 'welearner-features ' ),
            'view_item'             => esc_html__( 'View Creator', 'welearner-features ' ),
            'all_items'             => esc_html__( 'All Creators', 'welearner-features ' ),
            'search_items'          => esc_html__( 'Search Creators', 'welearner-features ' ),
            'parent_item_colon'     => esc_html__( 'Parent Creator:', 'welearner-features ' ),
            'not_found'             => esc_html__( 'No Creatorss found.', 'welearner-features ' ),
            'not_found_in_trash'    => esc_html__( 'No Creator found in Trash.', 'welearner-features ' ),
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

    add_action( 'init', 'welearner_codex_course_init' );
}

//  register taxonomy for course

/**
 * @see register_post_type() for registering custom post types.
 */
if (!function_exists('welearner_create_topic_taxonomies')) {
    function welearner_create_topic_taxonomies() {
        $labels = array(
            'name'              => esc_html_x( 'Course Topics', 'taxonomy general name', 'welearner-features ' ),
            'singular_name'     => esc_html_x( 'Course Topic', 'taxonomy singular name', 'welearner-features ' ),
            'search_items'      => esc_html__( 'Search Topics', 'welearner-features ' ),
            'all_items'         => esc_html__( 'All Topics', 'welearner-features ' ),
            'parent_item'       => esc_html__( 'Parent Topic', 'welearner-features ' ),
            'parent_item_colon' => esc_html__( 'Parent Topic:', 'welearner-features ' ),
            'edit_item'         => esc_html__( 'Edit Topic', 'welearner-features ' ),
            'update_item'       => esc_html__( 'Update Topic', 'welearner-features ' ),
            'add_new_item'      => esc_html__( 'Add New Topic', 'welearner-features ' ),
            'new_item_name'     => esc_html__( 'New Topic Name', 'welearner-features ' ),
            'menu_name'         => esc_html__( 'Course Topic', 'welearner-features ' ),
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