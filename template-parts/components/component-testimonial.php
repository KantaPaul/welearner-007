<?php
if (!defined('ABSPATH')) {
    die('Direct access forbidden.');
}

$testimonial_area_heading         = get_option('testimonial_area_heading', 'What our students have to say');
$testimonial_area_heading_content = get_option('testimonial_area_heading_content', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tristique placerat ligula, eget blandit ante tincidunt vel');
$testimonial_area_items           = get_option('testimonial_area_items', 3);
$testimonial_slider_loop          = get_option('testimonial_slider_loop', 'on');
$testimonial_slider_autoplay      = get_option('testimonial_slider_autoplay', 'on');
$testimonial_order_by             = get_option('testimonial_order_by', 'date');
$testimonial_order_sort           = get_option('testimonial_order_sort', 'DESC');
$testimonial_post_offset          = get_option('testimonial_post_offset', 0);

// slider loop
if (!empty($testimonial_slider_loop)) {
    $testimonial_slider_loop = "true";
} else {
    $testimonial_slider_loop = "false";
}

// slider autoplay
if (!empty($testimonial_slider_autoplay)) {
    $testimonial_slider_autoplay = "true";
} else {
    $testimonial_slider_autoplay = "false";
}

$testimonial_arrs = [
    'post_type'      => 'testimonial',
    'posts_per_page' => $testimonial_area_items,
    'offset'         => $testimonial_post_offset,
    'order'          => $testimonial_order_sort,
    'orderby'        => $testimonial_order_by,
];

$testimonial = new WP_Query($testimonial_arrs);

?>

<section class="welearner-testimonial-area default-spacer">
    <div class="container">
        <?php if (!empty($testimonial_area_heading) || !empty($testimonial_area_heading_content)) { ?>
        <div class="row welearner-section-title-wraper">
            <div class="col-sm-6">
                <?php if (!empty($testimonial_area_heading)) { ?>
                <h2 class="welearner-section-title"><?php echo esc_html($testimonial_area_heading); ?> </h2>
                <?php } ?>
            </div>
            <div class="col-sm-6">
                <?php if (!empty($testimonial_area_heading_content)) { ?>
                <blockquote class="welearner-section-content"><?php echo esc_html($testimonial_area_heading_content); ?> </blockquote>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
        <?php if($testimonial->have_posts()) {  ?>
        <div class="reviewer-content-wraper">
            <div class="owl-carousel reviewer_carousel" data-slider-item="<?php echo esc_attr( $testimonial_area_items ); ?>" data-slider-loop="<?php echo esc_attr( $testimonial_slider_loop )?>" data-slider-autoplay="<?php echo esc_attr( $testimonial_slider_autoplay )?>">
                <?php while($testimonial->have_posts()) {
                    $testimonial->the_post();
                    ?>
                    <div class="testimonial_single_item">
                        <?php if(has_post_thumbnail()) : ?>
                        <div class="reviewr-thummb">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                        <!-- // reviewer thumb -->
                        <?php endif; ?>

                        <div class="reviewer_content">
                            <h2 class="reviewr_title"><?php the_title(); ?> </h2>

                            <?php
                                $testimonial_reviewer_designation = '';
                                $testimonial_reviewer_featured_text = '';

                                if(defined('FW')) {
                                    $testimonial_reviewer_designation = fw_get_db_post_option(get_the_ID(), 'testimonial_reviewer_designation');
                                    $testimonial_reviewer_featured_text = fw_get_db_post_option(get_the_ID(), 'testimonial_reviewer_featured_text');
                                }
                            ?>

                            <?php if('' != $testimonial_reviewer_designation) : ?>
                            <p class="testimonial_reviewer_designation">
                                <?php echo esc_html($testimonial_reviewer_designation); ?>
                            </p>
                            <!-- //testimonial_reviewer_designation -->
                            <?php endif; ?>

                            <div class="reviewer-comment">
                                <?php the_content(); ?>
                            </div>
                            <!-- // reviewer comment -->

                            <?php if($testimonial_reviewer_featured_text != ''){ ?>
                            <h3 class="testimonial_reviewer_featured_text">
                                <?php echo wp_kses_post($testimonial_reviewer_featured_text); ?>
                            </h3>
                            <!-- // testimonial_reviewer_featured_text -->
                            <?php } ?>
                        </div>
                    </div>
                    <!-- // reviewer single item -->
                    <?php
                } wp_reset_postdata();
                ?>
            </div>
            <!-- // testimonial carousel -->
        </div>
        <!-- // carousel main wraper -->
        <?php } else { ?>
        <div class="alert alert-info" role="alert">
            <strong><?php echo esc_html__('No testimonial Found', 'welearner'); ?></strong>
        </div>
        <?php } ?>
    </div>
</section>
<!-- // testmonial section -->