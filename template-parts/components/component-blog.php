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

<section class="welearner-section-blog">
    <div class="container">
        <?php if (!empty($blog_area_heading)) { ?>
        <div class="welearner-section-title-wraper ">
            <div class="row">
                <div class="col-lg-6">
                    <div class="welearner-blog-section-title">
                        <h2 class="welearner-section-title"><?php echo esc_html($blog_area_heading); ?> </h2>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if($blog_post->have_posts()){ ?>
        <div class="blog-content row">
            <?php
            while($blog_post->have_posts()) {
                $blog_post->the_post();
            ?>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post">
                        <?php if(has_post_thumbnail(  )) :  ?>
                        <div class="entry-header">
                            <a class="entry-thumb" href="<?php echo esc_url(get_the_permalink()); ?>"  style="background-image: url(<?php echo esc_attr( get_the_post_thumbnail_url() ); ?>)"></a>
                        </div>
                        <!-- // entry header -->
                        <?php endif; ?>

                        <div class="entry-content">
                            <h4 class="entry-title"><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h4>
                            <a class="btn btn-link" href="<?php echo esc_url(get_the_permalink()); ?>"><?php echo esc_html__('Read Blog', 'welearner') ?> </a>
                        </div>
                        <!-- // blog content -->
                    </div>
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
    <div class="blog_shape_image">
        <img src="<?php echo esc_attr(get_template_directory_uri(  ) . '/assets/images/blog_shape_bg.png'); ?>" alt="bg shape">
    </div>
</section>
<!--  blog -->