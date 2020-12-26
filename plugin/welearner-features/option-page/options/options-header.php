<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//register our settings
if (!function_exists('welearner_header_options_setting')) {
    function welearner_header_options_setting() {

        // header
        register_setting( 'welearner-header-settings-group', 'header_button_two_title', );
        register_setting( 'welearner-header-settings-group', 'header_button_two_url' );
        register_setting( 'welearner-header-settings-group', 'header_button_two_show' );
    }
}

// banner options
if (!function_exists('welearner_header_func_settings')) {
    function welearner_header_func_settings(){
    ?>
        <div class="wrap">
            <h1><?php echo esc_html__('Header Setting', 'welearner-features '); ?> </h1>
            <hr>
            <form method="post" action="options.php">

                <?php
                    wp_nonce_field('update-header-options');
                    settings_fields( 'welearner-header-settings-group' );
                    do_settings_sections( 'welearner-header-settings-group' );
                ?>

                <table class="form-table" role="presentation">
                    <tbody>
                        <tr>
                            <th>
                                <label for="header_button_two_title"><?php echo esc_html__('Button Two Title', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <input type="text" placeholder="<?php echo esc_html__( 'Button Two Title', 'welearner-features' )?>" class="regular-text" name="header_button_two_title" id="header_button_two_title" value="<?php echo esc_attr( get_option('header_button_two_title') ); ?>" />
                            </td>
                        </tr>
                        <!-- // button two title -->

                        <tr>
                            <th>
                                <label for="header_button_two_url"><?php echo esc_html__('Button Two URL', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <input type="url" placeholder="<?php echo esc_html__( 'Button Two URL', 'welearner-features' )?>" class="regular-text" name="header_button_two_url" id="header_button_two_url" value="<?php echo esc_attr( get_option('header_button_two_url') ); ?>" />
                            </td>
                        </tr>
                        <!-- // button two url -->

                        <tr>
                            <th>
                                <label for="header_button_two_show"><?php echo esc_html__('Show Button Two', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <input type="checkbox" name="header_button_two_show" <?php echo esc_attr( get_option('header_button_two_show') !== "" ? "checked" : ""); ?>>
                            </td>
                        </tr>
                        <!-- // banner search -->
                    </tbody>
                </table>
            <?php submit_button(); ?>
            </form>
        </div>
    <?php
    }
}