<?php
    if (!defined('ABSPATH')) {
      die('Direct access forbidden.');
    }

    $tranding_course_area_heading     = get_option('tranding_course_area_heading', 'Tranding');
    $tranding_course_area_button_text = get_option('tranding_course_area_button_text', 'Show All');
    $tranding_course_area_button_url  = get_option('tranding_course_area_button_url', '#');
    $tranding_course_area_items       = get_option('tranding_course_area_items', 3);

    $course_arr = [
      'post_type'      => 'courses',
      'posts_per_page' => $tranding_course_area_items
    ];

    $courses = new WP_Query($course_arr);
?>

<section class="welearner-tranding-course-area">
  <div class="container">
    <?php
        new Welearner\Heading\Welearner_Heading_Class($tranding_course_area_heading, $tranding_course_area_button_text, $tranding_course_area_button_url);
    ?>
    <?php if($courses->have_posts()){ ?>
    <div class="row">
        <?php
            while($courses->have_posts()) {
              $courses->the_post();
              get_template_part('template-parts/components/loop/component-course', 'loop');
            }
        ?>
    </div>
    <?php } else { ?>
      <div class="alert alert-info" role="alert">
          <strong><?php echo esc_html__('No Course Found', 'welearner'); ?></strong>
      </div>
    <?php }; ?>
  </div>
</section>
<!-- // tranding course -->