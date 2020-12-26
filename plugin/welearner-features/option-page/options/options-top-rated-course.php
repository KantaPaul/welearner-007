<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//register our settings
if (!function_exists('welearner_toprated_options_setting')) {
    function welearner_toprated_options_setting() {

        // toprated course
        register_setting( 'welearner-toprated-settings-group', 'toprated_course_area_items' );
        register_setting( 'welearner-toprated-settings-group', 'toprated_post_offset' );
        register_setting( 'welearner-toprated-settings-group', 'toprated_course_area_heading' );
        register_setting( 'welearner-toprated-settings-group', 'toprated_course_area_button_text' );
        register_setting( 'welearner-toprated-settings-group', 'toprated_course_area_button_url' );
    }
}

// top rated course options
if (!function_exists('welearner_toprated_func_settings')) {
    function welearner_toprated_func_settings(){
    ?>
        <div class="wrap">
            <h1><?php echo esc_html__('Toprated Setting', 'welearner-features'); ?> </h1>
            <hr>
            <form method="post" action="options.php">

                <?php
                    wp_nonce_field('update-toprated-options');
                    settings_fields( 'welearner-toprated-settings-group' );
                    do_settings_sections( 'welearner-toprated-settings-group' );
                ?>

                <table class="form-table" role="presentation">
                    <tbody>
                        <tr>
                            <th>
                                <label for="toprated_course_area_items"><?php echo esc_html__('Items', 'welearner-features'); ?></label>
                            </th>
                            <td>
                                <input required type="number" min="1" max="15" placeholder="<?php echo esc_html__( 'Items', 'welearner-features' )?>" class="regular-text" name="toprated_course_area_items" id="toprated_course_area_items" value="<?php echo esc_attr( get_option('toprated_course_area_items') ); ?>" />
                                <p class="description"><?php echo esc_html__( 'Minimum 1 maximum 15', 'welearner-features' )?></p>
                            </td>
                        </tr>
                        <!-- // toprated course item -->

                        <tr>
                            <th>
                                <label for="toprated_post_offset"><?php echo esc_html__('Offset', 'welearner-features'); ?></label>
                            </th>
                            <td>
                                <input required type="number" placeholder="<?php echo esc_html__( 'Offset', 'welearner-features' )?>" class="regular-text" value="<?php echo esc_attr( get_option('toprated_post_offset') ); ?>" name="toprated_post_offset" min="0" max="20" id="toprated_post_offset">
                                <p class="description"><?php echo esc_html__( 'Minimum 0 maximum 20', 'welearner-features' )?></p>
                            </td>
                        </tr>
                        <!-- // offset -->

                        <tr>
                            <th>
                                <label for="toprated_course_area_heading"><?php echo esc_html__('Heading Title', 'welearner-features'); ?></label>
                            </th>
                            <td>
                                <input type="text" class="regular-text" name="toprated_course_area_heading" placeholder="<?php echo esc_html__( 'Heading Title', 'welearner-features' )?>" id="toprated_course_area_heading" value="<?php echo esc_attr( get_option('toprated_course_area_heading') ); ?>" />
                            </td>
                        </tr>
                        <!-- // toprated course title -->

                        <tr>
                            <th>
                                <label for="toprated_course_area_button_text"><?php echo esc_html__('Button Title', 'welearner-features'); ?></label>
                            </th>
                            <td>
                                <input type="text" class="regular-text"
                                placeholder="<?php echo esc_html__( 'Button Title', 'welearner-features' )?>" name="toprated_course_area_button_text" id="toprated_course_area_button_text" value="<?php echo esc_attr( get_option('toprated_course_area_button_text') ); ?>" />
                            </td>
                        </tr>
                        <!-- // toprated course button text -->

                        <tr>
                            <th>
                                <label for="toprated_course_area_button_url"><?php echo esc_html__('Button URL', 'welearner-features'); ?></label>
                            </th>
                            <td>
                                <input type="url" class="regular-text"
                                placeholder="<?php echo esc_html__( 'Button URL', 'welearner-features' )?>" name="toprated_course_area_button_url" id="toprated_course_area_button_url" value="<?php echo esc_attr( get_option('toprated_course_area_button_url') ); ?>" />
                            </td>
                        </tr>
                        <!-- // toprated course heading title url -->

                    </tbody>
                </table>
            <?php submit_button(); ?>
            </form>
        </div>
    <?php
    }
}