<?php
    if (!defined('ABSPATH')) {
        die('Direct access forbidden.');
    }

    $blog_area_items   = get_option('blog_area_items', 3);
    $blog_area_heading = get_option('blog_area_heading', 'Learning Support features');
    $blog_order_by     = get_option('blog_order_by', 'date');
    $blog_order_sort   = get_option('blog_order_sort', 'DESC');
    $blog_post_offset  = get_option('blog_post_offset', 0);

    $arrs_post = [
        'post_type'      => 'post',
        'orderby'        => array( $blog_order_by => $blog_order_sort ),
        'posts_per_page' => $blog_area_items,
        'offset'         =>  $blog_post_offset,
    ];

    $blog_post = new WP_Query($arrs_post);
?>

<section class="welearner-section-blog default-spacer">
    <div class="container">
        <?php if (!empty($blog_area_heading)) { ?>
        <div class="welearner-section-title-wraper">
            <h2 class="welearner-section-title"><?php echo esc_html($blog_area_heading); ?> </h2>
        </div>
        <?php } ?>
        <?php if($blog_post->have_posts()){ ?>
        <div class="blog-content row">
            <?php
            while($blog_post->have_posts()) {
                $blog_post->the_post();
            ?>
                <div class="col-lg-4 col-md-6">
                    <?php if(has_post_thumbnail(  )) :  ?>
                    <div class="entry-header">
                        <a class="entry-thumb" href="<?php echo esc_url(get_the_permalink()); ?>">
                           <?php the_post_thumbnail('post-image'); ?>
                        </a>
                    </div>
                    <!-- // entry header -->
                    <?php endif; ?>

                    <div class="entry-content">
                        <h2 class="entry-title"><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h2>
                        <a class="btn btn-link" href="<?php echo esc_url(get_the_permalink()); ?>"><?php echo esc_html__('Read Blog', 'welearner') ?> </a>
                    </div>
                    <!-- // blog content -->
                </div>
            <?php
            };
            wp_reset_postdata();
            ?>
        </div>
        <?php } else { ?>
        <div class="alert alert-info" role="alert">
            <strong><?php echo esc_html__('No Post Found', 'welearner'); ?></strong>
        </div>
        <?php }
        ?>
    </div>
</section>
<!--  blog -->