<?php

/**
 * Create A Simple Theme Options Panel
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if (!function_exists('welearner_options_panel')) {
    function welearner_options_panel(){
        // add menu page
        add_menu_page('Welearner', 'Theme Options', 'manage_options', 'welearner-theme-options');

        // add submenu page (Header Settings)
        add_submenu_page( 'welearner-theme-options', 'Heaader Options', 'Header Settings', 'manage_options', 'welearner-theme-options', 'welearner_header_func_settings');

        // add submenu page (Topic Settings)
        add_submenu_page( 'welearner-theme-options', 'Topic Options', 'Topic Settings', 'manage_options', 'welearner-topic-options', 'welearner_topic_func_settings');

        // add submenu page (Tranding Course Settings)
        add_submenu_page( 'welearner-theme-options', 'Tranding Course', 'Tranding Course', 'manage_options', 'welearner-tranding-options', 'welearner_tranding_func_settings');

        // add submenu page (Toprated Course Settings)
        add_submenu_page( 'welearner-theme-options', 'Toprated Course', 'Toprated Course', 'manage_options', 'welearner-toprated-options', 'welearner_toprated_func_settings');

        // add submenu page (Testimonial Settings)
        add_submenu_page( 'welearner-theme-options', 'Testimonial Options', 'Testimonial Settings', 'manage_options', 'welearner-testimonial-options', 'welearner_testimonial_func_settings');

        // add submenu page (Creator Settings)
        add_submenu_page( 'welearner-theme-options', 'Creator Options', 'Creator Settings', 'manage_options', 'welearner-creator-options', 'welearner_creator_func_settings');

        // add submenu page (Blog Settings)
        add_submenu_page( 'welearner-theme-options', 'Blog Options', 'Blog Settings', 'manage_options', 'welearner-blog-options', 'welearner_blog_func_settings');

        //call register settings function
        add_action( 'admin_init', 'welearner_blog_options_setting' );
        add_action( 'admin_init', 'welearner_creator_options_setting' );
        add_action( 'admin_init', 'welearner_header_options_setting' );
        add_action( 'admin_init', 'welearner_testimonial_options_setting' );
        add_action( 'admin_init', 'welearner_toprated_options_setting' );
        add_action( 'admin_init', 'welearner_topic_options_setting' );
        add_action( 'admin_init', 'welearner_tranding_options_setting' );
    }
    add_action('admin_menu', 'welearner_options_panel');
}


require_once(__DIR__ . '/options/options-header.php');
require_once(__DIR__ . '/options/options-topic.php');
require_once(__DIR__ . '/options/options-tranding-course.php');
require_once(__DIR__ . '/options/options-top-rated-course.php');
require_once(__DIR__ . '/options/options-testimonial.php');
require_once(__DIR__ . '/options/options-creator.php');
require_once(__DIR__ . '/options/options-blog.php');