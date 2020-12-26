<?php
/*
 * Static.php
 * enqueue all static stylesht and js
*/
if (!defined('ABSPATH')) {
	die('Direct access forbidden.');
}

if (!function_exists('welearner_static_scripts')) {
	function welearner_static_scripts() {
		wp_enqueue_style('bootstrap', WELEARNER_CSS .'bootstrap.min.css');
		wp_enqueue_style('theme-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Yantramanav:wght@400;500;700&display=swap" rel="stylesheet');
		wp_enqueue_style('font-awesome', WELEARNER_CSS .'font-awesome.min.css');
		wp_enqueue_style('owl-carousel', WELEARNER_CSS .'owl.carousel.min.css');
		wp_enqueue_style( 'welearner-style', get_stylesheet_uri(), array(), _S_VERSION );
		wp_style_add_data( 'welearner-style', 'rtl', 'replace' );


		wp_enqueue_script( 'waypoints', WELEARNER_JS . 'waypoints.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'jquery-counterup', WELEARNER_JS . 'jquery.counterup.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'bootstrap', WELEARNER_JS . 'bootstrap.min.js', array( 'jquery' ), _S_VERSION, true );
		wp_enqueue_script( 'popper', WELEARNER_JS . 'popper.min.js', array( 'jquery' ), _S_VERSION, true );
		wp_enqueue_script( 'owl-carousel', WELEARNER_JS . 'owl.carousel.min.js', array( 'jquery' ), _S_VERSION, true );
		wp_enqueue_script( 'welearner-scrpt', WELEARNER_JS . 'script.js', array( 'jquery' ), _S_VERSION, true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'welearner_static_scripts' );
}