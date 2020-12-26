<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//register our settings
if (!function_exists('welearner_topic_options_setting')) {
    function welearner_topic_options_setting() {
        // topic area
        register_setting( 'welearner-topic-settings-group', 'topic_total_items' );
        register_setting( 'welearner-topic-settings-group', 'topic_area_heading' );
        register_setting( 'welearner-topic-settings-group', 'topic_area_button_text' );
        register_setting( 'welearner-topic-settings-group', 'topic_area_button_url' );
    }
}

// topic options
if (!function_exists('welearner_topic_func_settings')) {
    function welearner_topic_func_settings(){
    ?>
        <div class="wrap">
            <h1><?php echo esc_html__('Topic Setting', 'welearner-features'); ?> </h1>
            <hr>
            <form method="post" action="options.php">

                <?php
                    wp_nonce_field('update-topic-options');
                    settings_fields( 'welearner-topic-settings-group' );
                    do_settings_sections( 'welearner-topic-settings-group' );
                ?>

                <table class="form-table" role="presentation">
                    <tbody>
                        <tr>
                            <th>
                                <label for="topic_total_items"><?php echo esc_html__('Topic Items', 'welearner-features'); ?></label>
                            </th>
                            <td>
                                <input required type="number" min="1" max="16" class="regular-text" name="topic_total_items" placeholder="<?php echo esc_html__( 'Items', 'welearner-features' )?>" id="topic_total_items" value="<?php echo esc_attr( get_option('topic_total_items') ); ?>" />
                                <p class="description"><?php echo esc_html__( 'Minimum 1 maximum 16', 'welearner-features' )?></p>
                            </td>
                        </tr>
                        <!-- // topic item -->

                        <tr>
                            <th>
                                <label for="topic_area_heading"><?php echo esc_html__('Heading Title', 'welearner-features'); ?></label>
                            </th>
                            <td>
                                <input type="text" placeholder="<?php echo esc_html__( 'Heading Title', 'welearner-features' )?>" class="regular-text" name="topic_area_heading" id="topic_area_heading" value="<?php echo esc_attr( get_option('topic_area_heading') ); ?>" />
                            </td>
                        </tr>
                        <!-- // topic title -->

                        <tr>
                            <th>
                                <label for="topic_area_button_text"><?php echo esc_html__('Button Text', 'welearner-features'); ?></label>
                            </th>
                            <td>
                                <input type="text" placeholder="<?php echo esc_html__( 'Button Text', 'welearner-features' )?>" class="regular-text" name="topic_area_button_text" id="topic_area_button_text" value="<?php echo esc_attr( get_option('topic_area_button_text') ); ?>" />
                            </td>
                        </tr>
                        <!-- // topic button text -->

                        <tr>
                            <th>
                                <label for="topic_area_button_url"><?php echo esc_html__('Button URL', 'welearner-features'); ?></label>
                            </th>
                            <td>
                                <input type="url" placeholder="<?php echo esc_html__( 'Button URL', 'welearner-features' )?>" class="regular-text" name="topic_area_button_url" id="topic_area_button_url" value="<?php echo esc_attr( get_option('topic_area_button_url') ); ?>" />
                            </td>
                        </tr>
                        <!-- // topic heading title url -->

                    </tbody>
                </table>
            <?php submit_button(); ?>
            </form>
        </div>
    <?php
    }
}