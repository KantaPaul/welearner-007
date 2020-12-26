<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


//register our settings
if (!function_exists('welearner_creator_options_setting')) {
    function welearner_creator_options_setting() {
        // creator
        register_setting( 'welearner-creator-settings-group', 'creator_area_items' );
        register_setting( 'welearner-creator-settings-group', 'creator_order_by' );
        register_setting( 'welearner-creator-settings-group', 'creator_order_sort' );
        register_setting( 'welearner-creator-settings-group', 'creator_post_offset' );
        register_setting( 'welearner-creator-settings-group', 'creator_slider_loop' );
        register_setting( 'welearner-creator-settings-group', 'creator_slider_autoplay' );
        register_setting( 'welearner-creator-settings-group', 'creator_area_heading' );
        register_setting( 'welearner-creator-settings-group', 'creator_area_heading_content' );
    }
}

// Creator options
if (!function_exists('welearner_creator_func_settings')) {
    function welearner_creator_func_settings(){
    ?>
        <div class="wrap">
            <h1><?php echo esc_html__('Creator Setting', 'welearner-features '); ?> </h1>
            <hr>
            <form method="post" action="options.php">

                <?php
                    wp_nonce_field('update-creator-options');
                    settings_fields( 'welearner-creator-settings-group' );
                    do_settings_sections( 'welearner-creator-settings-group' );
                ?>

                <table class="form-table" role="presentation">
                    <tbody>
                        <tr>
                            <th>
                                <label for="creator_area_items"><?php echo esc_html__('Items', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <input required type="number" placeholder="<?php echo esc_html__( 'Items', 'welearner-features' )?>" min="1" max="15" class="regular-text" name="creator_area_items" id="creator_area_items" value="<?php echo esc_attr( get_option('creator_area_items') ); ?>" />
                                <p class="description"><?php echo esc_html__( 'Minimum 1 maximum 15', 'welearner-features' )?></p>
                            </td>
                        </tr>
                        <!-- // creator item -->

                        <tr>
                            <th>
                                <label for="creator_order_by"><?php echo esc_html__('Order', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <select name="creator_order_by" id="creator_order_by">
                                    <option value="date" <?php if (get_option('creator_order_by') == 'date') echo ' selected="selected"'; ?>>Date</option>
                                    <option value="title" <?php if (get_option('creator_order_by') == 'title') echo ' selected="selected"'; ?>>Title</option>
                                    <option value="author" <?php if (get_option('creator_order_by') == 'author') echo ' selected="selected"'; ?>>Author</option>
                                    <option value="modified" <?php if (get_option('creator_order_by') == 'modified') echo ' selected="selected"'; ?>>Modified</option>
                                    <option value="comments" <?php if (get_option('creator_order_by') == 'comments') echo ' selected="selected"'; ?>>Comments</option>
                                </select>
                            </td>
                        </tr>
                        <!-- // order -->

                        <tr>
                            <th>
                                <label for="creator_order_sort"><?php echo esc_html__('Sort', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <select name="creator_order_sort" id="creator_order_sort">
                                    <option value="ASC" <?php if (get_option('creator_order_sort') == 'ASC') echo ' selected="selected"'; ?>>ASC</option>
                                    <option value="DESC" <?php if (get_option('creator_order_sort') == 'DESC') echo ' selected="selected"'; ?>>DESC</option>
                                </select>
                            </td>
                        </tr>
                        <!-- // order sort -->

                        <tr>
                            <th>
                                <label for="creator_post_offset"><?php echo esc_html__('Offset', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <input required placeholder="<?php echo esc_html__( 'Offset', 'welearner-features' )?>" type="number" class="regular-text" value="<?php echo esc_attr( get_option('creator_post_offset') ); ?>" name="creator_post_offset" min="0" max="20" id="creator_post_offset">
                                <p class="description"><?php echo esc_html__( 'Minimum 0 and maximum 20', 'welearner-features' )?></p>
                            </td>
                        </tr>
                        <!-- // offset -->

                        <tr>
                            <th>
                                <label for="creator_slider_loop"><?php echo esc_html__('Slider Loop', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <input type="checkbox" name="creator_slider_loop" <?php echo esc_attr( get_option('creator_slider_loop') !== "" ? "checked" : ""); ?>>
                            </td>
                        </tr>
                        <!-- // slider loop -->

                        <tr>
                            <th>
                                <label for="creator_slider_autoplay"><?php echo esc_html__('Slider Autoplay', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <input type="checkbox" name="creator_slider_autoplay" <?php echo esc_attr( get_option('creator_slider_autoplay') !== "" ? "checked" : ""); ?>>
                            </td>
                        </tr>
                        <!-- // slider autoplay -->

                        <tr>
                            <th>
                                <label for="creator_area_heading"><?php echo esc_html__('Heading Title', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <input type="text" placeholder="<?php echo esc_html__( 'Heading Title', 'welearner-features' )?>" class="regular-text" name="creator_area_heading" id="creator_area_heading" value="<?php echo esc_attr( get_option('creator_area_heading') ); ?>" />
                            </td>
                        </tr>
                        <!-- // creator title -->

                        <tr>
                            <th>
                                <label for="creator_area_heading_content"><?php echo esc_html__('Heading Content', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <textarea maxlength="150" placeholder="<?php echo esc_html__( 'Heading Content', 'welearner-features' )?>" class="large-text code" name="creator_area_heading_content" id="creator_area_heading_content" cols="30" rows="10"><?php echo esc_attr( get_option('creator_area_heading_content') ); ?></textarea>
                                <p class="description"><?php echo esc_html__( 'Maximum 150 Charecter', 'welearner-features' )?></p>
                            </td>
                        </tr>
                        <!-- // creator heading coontent -->

                    </tbody>
                </table>
            <?php submit_button(); ?>
            </form>
        </div>
    <?php
    }
}