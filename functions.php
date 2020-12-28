<?php
/**
 * welearner functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package welearner
 */
if (!defined('ABSPATH')) {
	die('Direct access forbidden.');
}
define( 'WELEARNER_VERSION', '1.0' );
define( 'WELEARNER_TEMPLATE_DIRECTORY_URI', get_template_directory_uri() );
define( 'WELEARNER_REMOTE_URL', get_template_directory() . '/demo-content' );
define( 'WELEARNER_CSS', WELEARNER_TEMPLATE_DIRECTORY_URI . '/assets/css/' );
define( 'WELEARNER_JS', WELEARNER_TEMPLATE_DIRECTORY_URI . '/assets/js/' );

if ( ! function_exists( 'welearner_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function welearner_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on welearner, use a find and replace
		 * to change 'welearner' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'welearner', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'post-image', '420', '245', true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary_menu' => esc_html__( 'Primary', 'welearner' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'welearner_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function welearner_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'welearner_content_width', 640 );
}
add_action( 'after_setup_theme', 'welearner_content_width', 0 );


/**
 * Enqueue scripts and styles.
 */

require get_template_directory() . '/inc/enqueue/static.php';
/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


// unyson
function welearner_framework_customizations_path($rel_path) {
    return '/inc/theme-customizer';
}
add_filter('fw_framework_customizations_dir_rel_path', 'welearner_framework_customizations_path');


include get_template_directory() . '/inc/classes/class-heading-title.php';

// add tgmpa class
require_once get_template_directory(  ) . '/inc/classes/class-tgm-plugin-activation.php';

// tgmp plugin
require_once get_template_directory(  ) . '/inc/hooks/install-fragments/tgmpa-plugins.php';

// theme demos
require_once get_template_directory(  ) . '/inc/hooks/install-fragments/theme-demos.php';

// register widget
require_once get_template_directory(  ) . '/inc/widgets/widgets.php';
