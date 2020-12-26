<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//register our settings
if (!function_exists('welearner_tranding_options_setting')) {
    function welearner_tranding_options_setting() {
        // tranding course
        register_setting( 'welearner-tranding-settings-group', 'tranding_course_area_items' );
        register_setting( 'welearner-tranding-settings-group', 'tranding_course_area_heading' );
        register_setting( 'welearner-tranding-settings-group', 'tranding_course_area_button_text' );
        register_setting( 'welearner-tranding-settings-group', 'tranding_course_area_button_url' );
    }
}

// tranding course options
if (!function_exists('welearner_tranding_func_settings')) {
    function welearner_tranding_func_settings(){
    ?>
        <div class="wrap">
            <h1><?php echo esc_html__('Tranding Setting', 'welearner-features'); ?> </h1>
            <hr>
            <form method="post" action="options.php">

                <?php
                    wp_nonce_field('update-tranding-options');
                    settings_fields( 'welearner-tranding-settings-group' );
                    do_settings_sections( 'welearner-tranding-settings-group' );
                ?>

                <table class="form-table" role="presentation">
                    <tbody>
                        <tr>
                            <th>
                                <label for="tranding_course_area_items"><?php echo esc_html__('Items', 'welearner-features'); ?></label>
                            </th>
                            <td>
                                <input required placeholder="<?php echo esc_html__( 'Items', 'welearner-features' )?>" type="number" min="1" max="15" class="regular-text" name="tranding_course_area_items" id="tranding_course_area_items" value="<?php echo esc_attr( get_option('tranding_course_area_items') ); ?>" />
                                <p class="description"><?php echo esc_html__( 'Minimum 1 maximum 15', 'welearner-features' )?></p>
                            </td>
                        </tr>
                        <!-- // tranding course item -->

                        <tr>
                            <th>
                                <label for="tranding_course_area_heading"><?php echo esc_html__('Title', 'welearner-features'); ?></label>
                            </th>
                            <td>
                                <input type="text" placeholder="<?php echo esc_html__( 'Heading Ttitle', 'welearner-features' )?>" class="regular-text" name="tranding_course_area_heading" id="tranding_course_area_heading" value="<?php echo esc_attr( get_option('tranding_course_area_heading') ); ?>" />
                            </td>
                        </tr>
                        <!-- // tranding course title -->

                        <tr>
                            <th>
                                <label for="tranding_course_area_button_text"><?php echo esc_html__('Button Text', 'welearner-features'); ?></label>
                            </th>
                            <td>
                                <input type="text" class="regular-text" placeholder="<?php echo esc_html__( 'Button Title', 'welearner-features' )?>" name="tranding_course_area_button_text" id="tranding_course_area_button_text" value="<?php echo esc_attr( get_option('tranding_course_area_button_text') ); ?>" />
                            </td>
                        </tr>
                        <!-- // tranding course button text -->

                        <tr>
                            <th>
                                <label for="tranding_course_area_button_url"><?php echo esc_html__('Button URL', 'welearner-features'); ?></label>
                            </th>
                            <td>
                                <input type="url" class="regular-text" placeholder="<?php echo esc_html__( 'Button URL', 'welearner-features' )?>" name="tranding_course_area_button_url" id="tranding_course_area_button_url" value="<?php echo esc_attr( get_option('tranding_course_area_button_url') ); ?>" />
                            </td>
                        </tr>
                        <!-- // tranding course heading title url -->

                    </tbody>
                </table>
            <?php submit_button(); ?>
            </form>
        </div>
    <?php
    }
}