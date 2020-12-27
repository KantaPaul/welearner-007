<?php
if (!defined('ABSPATH')) {
    die('Direct access forbidden.');
}

$creator_area_heading         = get_option('creator_area_heading', 'Our Popular Creator');
$creator_area_heading_content = get_option('creator_area_heading_content', '45+ million people are already learning on Welearners');
$creator_area_items           = get_option('creator_area_items', 3);
$creator_slider_loop          = get_option('creator_slider_loop', 'on');
$creator_slider_autoplay      = get_option('creator_slider_autoplay', 'on');
$creator_post_offset          = get_option('creator_post_offset', 0);
$creator_order_sort           = get_option('creator_order_sort', 'DESC');
$creator_order_by             = get_option('creator_order_by', 'date');

// slider loop
if (!empty($creator_slider_loop)) {
    $creator_slider_loop = "true";
} else {
    $creator_slider_loop = "false";
}

// slider autoplay
if (!empty($creator_slider_autoplay)) {
    $creator_slider_autoplay = "true";
} else {
    $creator_slider_autoplay = "false";
}

$createor_arr = [
    'post_type'      => 'creator',
    'posts_per_page' => $creator_area_items,
    'offset'         => $creator_post_offset,
    'order'          => $creator_order_sort,
    'orderby'        => $creator_order_by,
];

$creators = new WP_Query($createor_arr);

?>

<section class="welearner-section-creator" id="creator_section">
    <div class="container">
        <?php if (!empty($creator_area_heading) || !empty($creator_area_heading_content)) { ?>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="welearner-section-title-wraper welearner-creator-heading text-center">
                    <?php if (!empty($creator_area_heading)) { ?>
                    <h2 class="welearner-section-title"><?php echo esc_html($creator_area_heading); ?> </h2>
                    <?php } ?>
                    <?php if (!empty($creator_area_heading_content)) { ?>
                    <p class="welearner-section-content"><?php echo esc_html($creator_area_heading_content); ?> </p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- // team heading info -->
        <?php } ?>

        <?php if($creators->have_posts()){ ?>
        <div class="creator-content">
            <div class="owl-carousel creator_carousel" data-slider-item="<?php echo esc_attr( $creator_area_items ); ?>" data-slider-loop="<?php echo esc_attr( $creator_slider_loop )?>" data-slider-autoplay="<?php echo esc_attr( $creator_slider_autoplay )?>">
            <?php
                while($creators->have_posts()) {
                    $creators->the_post();

                    $social_profiles = [];
                    $creator_designation = '';
                    if(defined('FW')) {
                        $social_profiles = fw_get_db_post_option(get_the_ID(), 'creator_social_profiles');
                        $creator_designation = fw_get_db_post_option(get_the_ID(), 'creator_designation');
                    }
                    ?>
                    <div class="single_creator_item">
                        <?php if(has_post_thumbnail()) { ?>
                        <div class="creator_thumbnail_wraper">
                            <a class="creator_thumbnail" href="<?php echo esc_url(get_the_permalink()); ?>">
                                <?php  the_post_thumbnail([354, 354]); ?>
                            </a>
                            <!-- // creator thumb -->
                            <?php if(!empty($social_profiles)) { ?>
                            <div class="team-social-icon">
                                <ul class="list-unstyled social-media-profile">
                                    <?php foreach($social_profiles as $social_profile) { ?>
                                        <li>
                                            <a href="<?php echo esc_url($social_profile['social_media_link']); ?>">
                                                <?php if (is_array($social_profile['social_icon'])) { ?>
                                                <i class="<?php echo esc_attr($social_profile['social_icon']['icon-class']); ?>"></i>
                                                <?php } else { ?>
                                                <i class="<?php echo esc_attr($social_profile['social_icon']); ?>"></i>
                                                <?php } ?>
                                            </a>
                                        </li>
                                    <?php }; ?>
                                </ul>
                            </div>
                            <!-- // creator social icon -->
                            <?php }; ?>
                        </div>
                        <?php  }; ?>

                        <div class="creator-meta-info">
                            <h4 class="creator_name">
                                <a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a>
                            </h4>
                            <?php if(!empty($creator_designation)) { ?>
                            <span class="creator_designation"><?php echo esc_html($creator_designation); ?> </span>
                            <?php }; ?>
                        </div>
                    </div>
                    <?php
                } wp_reset_postdata();
            ?>
            </div>
        </div>
        <!-- // creator content -->
        <?php } else { ?>
            <div class="alert alert-info" role="alert">
                <strong><?php echo esc_html__('No Creator Found', 'welearner'); ?></strong>
            </div>
        <?php }
        ?>
    </div>
    <div class="bg_image_shape">
        <img src="<?php echo esc_attr(get_template_directory_uri(  ) . '/assets/images/team_bg_shpae.png'); ?>" alt="bg shape">
    </div>
</section>
<!-- // creator section -->