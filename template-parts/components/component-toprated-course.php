<?php
    if (!defined('ABSPATH')) {
        die('Direct access forbidden.');
    }

    $toprated_course_area_heading     = get_option('toprated_course_area_heading', 'Top rated');
    $toprated_course_area_button_text = get_option('toprated_course_area_button_text', 'Show All');
    $toprated_course_area_button_url  = get_option('toprated_course_area_button_url', '#');
    $toprated_course_area_items       = get_option('toprated_course_area_items', 3);
    $toprated_post_offset             = get_option('toprated_post_offset', 0);

    $course_arr = [
        'post_type'      => 'courses',
        'posts_per_page' => $toprated_course_area_items,
        'meta_key'       => 'fw_option:course__rating',
        'orderby'        => 'meta_value_num',
        'offset'         => $toprated_post_offset,
    ];

    $courses = new WP_Query($course_arr);
?>

<section class="welearner-toprated-course-area">
    <div class="container">
        <?php
            new Welearner\Heading\Welearner_Heading_Class($toprated_course_area_heading, $toprated_course_area_button_text, $toprated_course_area_button_url);
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
<!-- // toprated course -->