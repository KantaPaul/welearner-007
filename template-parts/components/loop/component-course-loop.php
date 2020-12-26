<?php
    if (!defined('ABSPATH')) {
        die('Direct access forbidden.');
    }

    $taxonomie_lists =  wp_get_post_terms(get_the_ID(), 'topic');

    $course_taxonomies_color = '#14E5E5';
    $course_taxonomies_bg_color = '#EFFDFD';

    $course_rating = '';

    $course_main_price = '';
    $course_sell_price = '';

    if(defined('FW')) {
        // tax color
        if (!empty(fw_get_db_post_option(get_the_ID(), 'pp__taxonomy__color'))) {
            $course_taxonomies_color = fw_get_db_post_option(get_the_ID(), 'pp__taxonomy__color');
        }

        // tax bg
        if (!empty(fw_get_db_post_option(get_the_ID(), 'pp__taxonomy_bg_color'))) {
            $course_taxonomies_bg_color = fw_get_db_post_option(get_the_ID(), 'pp__taxonomy_bg_color');
        }

        $course_rating = fw_get_db_post_option(get_the_ID(), 'course__rating');

        $course_main_price = fw_get_db_post_option(get_the_ID(), 'course_main_price');
        $course_sell_price = fw_get_db_post_option(get_the_ID(), 'course_sell_price');
    } else {
        $course_taxonomies_color    = "#14E5E5";
        $course_taxonomies_bg_color = "#EFFDFD";
        $course_rating              = 5;
        $course_main_price          = "$30.50";
        $course_sell_price          = "$17.150";
    }

    $course_max_rating   = 5;
    $total_course_rating = $course_max_rating - $course_rating;
?>

<div class="col-md-6 col-lg-4">
    <div class="single-course-content card card-body">
        <?php if(has_post_thumbnail()) { ?>
        <a class="course-thumbnail" href="<?php echo esc_url(get_the_permalink());  ?>" style="background-image: url(<?php echo esc_attr( get_the_post_thumbnail_url() ); ?>)"></a>
        <?php }; ?>
        <!-- // course thumb -->
        <div class="course-meta d-flex justify-content-between align-items-center">
            <?php if('' != $taxonomie_lists) { ?>
            <div class="meta-categories">
                <?php foreach($taxonomie_lists as $tax){ ?>
                    <a class="course-meta-cat badge-pill" style="color: <?php echo esc_attr( $course_taxonomies_color ); ?>; background-color: <?php echo esc_attr( $course_taxonomies_bg_color ); ?>"  href="<?php echo esc_url(get_term_link($tax->term_id, 'topic')); ?>"><?php echo esc_html($tax->name); ?></a>
                <?php } ?>
            </div>
            <!-- // meta-categories -->
            <?php }; ?>

            <div class="course-rating">
                <?php for($x = 1; $x <= $course_rating ; $x++) { ?>
                    <i class="fa fa-star total-course-rating"></i>
                <?php } ?>
                <?php for($y = 1; $y <= $total_course_rating; $y++) { ?>
                    <i class="fa fa-star negative-course-rating"></i>
                <?php } ?>
            </div>
            <!-- // course-rating -->
        </div>
        <!-- // course meta -->

        <div class="course-entry-contnet-area">
            <h3 class="course-entry-title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <!-- // entry title -->
            <div class="course-user-meta">
            <?php
                $author_id = get_the_author_meta( 'ID' );
                echo get_avatar($author_id, 40);
                ?>
                <span class="author_display_name"><?php the_author_meta( 'display_name', $author_id ); ?></span>
                <?php
            ?>
            </div>
            <!-- // user meta -->
        </div>
        <!-- // course entry content area -->

        <div class="course-footer d-flex justify-content-between align-items-center card-footer bg-transparent">
            <div class="course-price">
                <?php if('' != $course_sell_price) { ?>
                <del><?php echo esc_html($course_sell_price); ?></del>
                <?php }; ?>
                <?php if('' != $course_main_price) { ?>
                <span><?php echo esc_html($course_main_price); ?> </span>
                <?php }; ?>
            </div>
            <!-- // price -->
            <div class="course-footer-button">
                <a href="#" class="btn btn-outline-primary btn-sm"><?php echo esc_html__('Watch Preview', 'welearner') ?> </a>
            </div>
            <!-- // course button meta -->
        </div>
        <!-- // course footer -->
    </div>
    <!-- // single course content -->
</div>
<!-- // end column -->