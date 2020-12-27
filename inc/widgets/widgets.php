<?php
/*
 * Register theme footer widgets
*/

if ( function_exists('register_sidebar') ) {
    if (!function_exists('welearner_awesome_sidebar')) {
        function welearner_awesome_sidebar() {
            $footer_widget_one = array(
                'id'            => 'widget_one',
                'before_widget' => '<div class="%2$s"><div class="widget-holder footer_widget">',
                'after_widget'  => '</div></div>',
                'before_title'  => '<h4 class="widgets-title">',
                'after_title'   => '</h4>',
                'name'          => __( 'Footer 1', 'welearner' ),
            );
            $footer_widget_two = array(
                'id'            => 'widget_two',
                'before_widget' => '<div class="%2$s"><div class="widget-holder footer_widget">',
                'after_widget'  => '</div></div>',
                'before_title'  => '<h4 class="widgets-title">',
                'after_title'   => '</h4>',
                'name'          => __( 'Footer 2', 'welearner' ),
            );
            $footer_widget_three = array(
                'id'            => 'widget_three',
                'before_widget' => '<div class = "%2$s"><div class="widget-holder footer_widget">',
                'after_widget'  => '</div></div>',
                'before_title'  => '<h4 class="widgets-title">',
                'after_title'   => '</h4>',
                'name'          => __( 'Footer 3', 'welearner' ),
            );
            $footer_widget_four = array(
                'id'            => 'widget_four',
                'before_widget' => '<div class="%2$s"><div class="widget-holder footer_widget">',
                'after_widget'  => '</div></div>',
                'before_title'  => '<h4 class="widgets-title">',
                'after_title'   => '</h4>',
                'name'          => __( 'Footer 4', 'welearner' ),
            );

            register_sidebar($footer_widget_one);
            register_sidebar($footer_widget_two);
            register_sidebar($footer_widget_three);
            register_sidebar($footer_widget_four);
        }
    }
}

add_action( 'widgets_init', 'welearner_awesome_sidebar' );
