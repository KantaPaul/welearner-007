<?php
/**
 * Template part for displaying Home page page content in page.php
 *
 * @package welearner
 */
if (!defined('ABSPATH')) {
	die('Direct access forbidden.');
}
?>

<?php get_template_part( 'template-parts/components/component', 'topic' ); ?>
<?php get_template_part( 'template-parts/components/component-tranding', 'course' ); ?>
<?php get_template_part( 'template-parts/components/component-toprated', 'course' ); ?>
<?php get_template_part( 'template-parts/components/component', 'counter' ); ?>
<?php get_template_part( 'template-parts/components/component', 'testimonial' ); ?>
<?php get_template_part( 'template-parts/components/component', 'client' ); ?>
<?php get_template_part( 'template-parts/components/component', 'creator' ); ?>
<?php get_template_part( 'template-parts/components/component', 'blog' ); ?>
<?php get_template_part( 'template-parts/components/component', 'call-to-action' ); ?>
