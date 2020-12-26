<?php 
/**
 * Dispaly course serch result 
 * 
 */
if (!defined('ABSPATH')) {
   die('Direct access forbidden.');
}
?>
<div class="container mb-5 mt-5">
   <?php get_template_part('template-parts/sections/content', 'course-loop'); ?> 
</div>
<?php 
get_footer();