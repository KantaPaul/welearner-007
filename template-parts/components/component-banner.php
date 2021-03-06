<?php
    if (!defined('ABSPATH')) {
        die('Direct access forbidden.');
    }
    $banner_heading = "";
    $banner_content = "";
    $banner_bg_color   = "";
    $top_banner_search_show = "";
    if(defined('FW')) {
        $banner_heading         = fw_get_db_customizer_option('top_banner_heading');
        $banner_content         = fw_get_db_customizer_option('top_banner_content');
        $banner_bg_color           = fw_get_db_customizer_option('top_banner_background');
        $top_banner_search_show = fw_get_db_customizer_option('top_banner_search_show');
    } else {
        $top_banner_search_show = "true";
        $banner_heading         = "Discover a new way of learning ";
        $banner_content         = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper dapibus turpis vel pellentesque. ";
        $banner_bg_color        = "#3028AF";
    }

    if (empty($banner_bg_color)) {
        $banner_bg_color = "#3028AF";
    } else {
        $banner_bg_color = $banner_bg_color;
    }
?>

<div class="welearner-banner_area" style="background-color: <?php echo esc_attr( $banner_bg_color ); ?>" id="home_section">
    <div class="welearner_banner_memphis memphis_one">
        <img src="<?php echo esc_attr( get_template_directory_uri(  ) . '/assets/images/banner_memphis.png' ); ?>" alt="memphis one">
    </div>
    <div class="welearner_banner_memphis memphis_two">
        <img src="<?php echo esc_attr( get_template_directory_uri(  ) . '/assets/images/banner_round_memphis.png' ); ?>" alt="memphis two">
    </div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="welearner-banner-main-content-wrapper d-flex align-items-center">
					<div class="welearner-banner-main-content">
                        <?php if (!empty($banner_heading)) { ?>
                        <h1 class="welearner_baner_heading_title"><?php echo esc_html( $banner_heading )?></h1>
                        <!-- // banner heading -->
                        <?php } ?>

                        <?php if (!empty($banner_content)) { ?>
                        <p class="welearner_banner_content"><?php echo esc_html( $banner_content )?></p>
                        <!-- // banner content -->
                        <?php } ?>

                        <?php
                        if (!empty($top_banner_search_show) && $top_banner_search_show == 'true') { ?>
                        <form method="GET" class="welearner-course-search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
                            <input type="search" placeholder="<?php echo esc_attr__('What do you want to learn?', 'welearner') ?>" class="form-control" value="<?php echo get_search_query() ?>" name="s">
                            <input type="hidden" name="post_type" value="courses" />
                            <button type="submit" class="btn btn-primary"><?php echo esc_html__('Search', 'welearner') ?> </button>
                        </form>
                        <!-- // search form -->
                        <?php }
                        ?>
                    </div>
                </div>
                <!-- // banner content -->
            </div>
            <!-- // col-lg-8 -->
            <div class="col-lg-4 align-self-end">
                <div class="banner_man_image">
                    <img src="<?php echo esc_attr( get_template_directory_uri(  ) . '/assets/images/banner_man.png' ); ?>" alt="man image">
                </div>
            </div>
        </div>
        <!-- // row -->
    </div>
    <!-- // container -->
</div>
<!-- // banner area -->