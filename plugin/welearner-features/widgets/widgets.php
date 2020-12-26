<?php
/*
 * Register theme footer widgets
*/

if ( function_exists('register_sidebar') ) {
    $footer_widget_one = array(
        'id'            => 'widget_one',
        'before_widget' => '<div class = "%2$s"><div class = "widget-holder">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class  = "widgets-title">',
        'after_title'   => '</h3>',
        'name'          => __( 'Footer 1', 'welerner-assistance' ),
    );
    $footer_widget_two = array(
        'id'            => 'widget_two',
        'before_widget' => '<div class = "%2$s"><div class = "widget-holder">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class  = "widgets-title">',
        'after_title'   => '</h3>',
        'name'          => __( 'Footer 2', 'welerner-assistance' ),
    );
    $footer_widget_three = array(
        'id'            => 'widget_three',
        'before_widget' => '<div class = "%2$s"><div class = "widget-holder">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class  = "widgets-title">',
        'after_title'   => '</h3>',
        'name'          => __( 'Footer 3', 'welerner-assistance' ),
    );
    $footer_widget_four = array(
        'id'            => 'widget_four',
        'before_widget' => '<div class = "%2$s"><div class = "widget-holder">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class  = "widgets-title">',
        'after_title'   => '</h3>',
        'name'          => __( 'Footer 4', 'welerner-assistance' ),
    );

    register_sidebar($footer_widget_one);
    register_sidebar($footer_widget_two);
    register_sidebar($footer_widget_three);
    register_sidebar($footer_widget_four);
}
