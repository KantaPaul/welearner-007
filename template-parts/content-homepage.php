<?php
/**
 * Template part for displaying Home page page content in page.php
 *
 * @package welearner
 */
if (!defined('ABSPATH')) {
	die('Direct access forbidden.');
}

get_template_part( 'template-parts/components/component', 'topic' );
get_template_part( 'template-parts/components/component-tranding', 'course' );
get_template_part( 'template-parts/components/component-toprated', 'course' );
get_template_part( 'template-parts/components/component', 'counter' );
get_template_part( 'template-parts/components/component', 'testimonial' );
get_template_part( 'template-parts/components/component', 'creator' );
get_template_part( 'template-parts/components/component', 'blog' );
get_template_part( 'template-parts/components/component', 'call-to-action' );

?>