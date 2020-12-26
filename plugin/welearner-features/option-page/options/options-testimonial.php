<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//register our settings
if (!function_exists('welearner_testimonial_options_setting')) {
    function welearner_testimonial_options_setting() {
        // testimonial
        register_setting( 'welearner-testimonial-settings-group', 'testimonial_area_items' );
        register_setting( 'welearner-testimonial-settings-group', 'testimonial_order_by' );
        register_setting( 'welearner-testimonial-settings-group', 'testimonial_order_sort' );
        register_setting( 'welearner-testimonial-settings-group', 'testimonial_post_offset' );
        register_setting( 'welearner-testimonial-settings-group', 'testimonial_area_heading' );
        register_setting( 'welearner-testimonial-settings-group', 'testimonial_area_heading_content' );
        register_setting( 'welearner-testimonial-settings-group', 'testimonial_slider_loop' );
        register_setting( 'welearner-testimonial-settings-group', 'testimonial_slider_autoplay' );
    }
}

// testimonial options
if (!function_exists('welearner_testimonial_func_settings')) {
    function welearner_testimonial_func_settings(){
    ?>
        <div class="wrap">
            <h1><?php echo esc_html__('Testimonial Setting', 'welearner-features '); ?> </h1>
            <hr>
            <form method="post" action="options.php">

                <?php
                    wp_nonce_field('update-testimonial-options');
                    settings_fields( 'welearner-testimonial-settings-group' );
                    do_settings_sections( 'welearner-testimonial-settings-group' );
                ?>

                <table class="form-table" role="presentation">
                    <tbody>
                        <tr>
                            <th>
                                <label for="testimonial_area_items"><?php echo esc_html__('Items', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <input type="number" required placeholder="<?php echo esc_html__( 'Items', 'welearner-features' )?>" min="1" max="15" class="regular-text" name="testimonial_area_items" id="testimonial_area_items" value="<?php echo esc_attr( get_option('testimonial_area_items') ); ?>" />
                                <p class="description"><?php echo esc_html__( 'Minimum 1 maximum 15', 'welearner-features' )?></p>
                            </td>
                        </tr>
                        <!-- // testimonial item -->

                        <tr>
                            <th>
                                <label for="testimonial_order_by"><?php echo esc_html__('Order', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <select name="testimonial_order_by" id="testimonial_order_by">
                                    <option value="date" <?php if (get_option('testimonial_order_by') == 'date') echo ' selected="selected"'; ?>>Date</option>
                                    <option value="title" <?php if (get_option('testimonial_order_by') == 'title') echo ' selected="selected"'; ?>>Title</option>
                                    <option value="author" <?php if (get_option('testimonial_order_by') == 'author') echo ' selected="selected"'; ?>>Author</option>
                                    <option value="modified" <?php if (get_option('testimonial_order_by') == 'modified') echo ' selected="selected"'; ?>>Modified</option>
                                    <option value="comments" <?php if (get_option('testimonial_order_by') == 'comments') echo ' selected="selected"'; ?>>Comments</option>
                                </select>
                            </td>
                        </tr>
                        <!-- // order -->

                        <tr>
                            <th>
                                <label for="testimonial_order_sort"><?php echo esc_html__('Sort', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <select name="testimonial_order_sort" id="testimonial_order_sort">
                                    <option value="ASC" <?php if (get_option('testimonial_order_sort') == 'ASC') echo ' selected="selected"'; ?>>ASC</option>
                                    <option value="DESC" <?php if (get_option('testimonial_order_sort') == 'DESC') echo ' selected="selected"'; ?>>DESC</option>
                                </select>
                            </td>
                        </tr>
                        <!-- // order sort -->

                        <tr>
                            <th>
                                <label for="testimonial_post_offset"><?php echo esc_html__('Offset', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <input type="number" required placeholder="<?php echo esc_html__( 'Offset', 'welearner-features' )?>" class="regular-text" value="<?php echo esc_attr( get_option('testimonial_post_offset') ); ?>" name="testimonial_post_offset" min="0" max="20" id="testimonial_post_offset">
                                <p class="description"><?php echo esc_html__( 'Minimum 0 maximum 20', 'welearner-features' )?></p>
                            </td>
                        </tr>
                        <!-- // offset -->

                        <tr>
                            <th>
                                <label for="testimonial_slider_loop"><?php echo esc_html__('Slider Loop', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <input type="checkbox" name="testimonial_slider_loop" <?php echo esc_attr( get_option('testimonial_slider_loop') !== "" ? "checked" : ""); ?>>
                            </td>
                        </tr>
                        <!-- // slider loop -->

                        <tr>
                            <th>
                                <label for="testimonial_slider_autoplay"><?php echo esc_html__('Slider Autoplay', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <input type="checkbox" name="testimonial_slider_autoplay" <?php echo esc_attr( get_option('testimonial_slider_autoplay') !== "" ? "checked" : ""); ?>>
                            </td>
                        </tr>
                        <!-- // slider autoplay -->

                        <tr>
                            <th>
                                <label for="testimonial_area_heading"><?php echo esc_html__('Heading Title', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <input type="text" placeholder="<?php echo esc_html__( 'Heading Title', 'welearner-features' )?>" class="regular-text" name="testimonial_area_heading" id="testimonial_area_heading" value="<?php echo esc_attr( get_option('testimonial_area_heading') ); ?>" />
                            </td>
                        </tr>
                        <!-- // testimonial title -->

                        <tr>
                            <th>
                                <label for="testimonial_area_heading_content"><?php echo esc_html__('Heading Content', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <textarea  maxlength="150" placeholder="<?php echo esc_html__( 'Heading Content', 'welearner-features' )?>" class="large-text code" name="testimonial_area_heading_content" id="testimonial_area_heading_content" cols="30" rows="10"><?php echo esc_attr( get_option('testimonial_area_heading_content') ); ?></textarea>
                                <p class="description"><?php echo esc_html__( 'Maximum 150 Charecter', 'welearner-features' )?></p>
                            </td>
                        </tr>
                        <!-- // testimonial heading coontent -->

                    </tbody>
                </table>
            <?php submit_button(); ?>
            </form>
        </div>
    <?php
    }
}