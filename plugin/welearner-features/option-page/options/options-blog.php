<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if (!function_exists('welearner_blog_options_setting')) {
    function welearner_blog_options_setting() {
        // blog
        register_setting( 'welearner-blog-settings-group', 'blog_area_items' );
        register_setting( 'welearner-blog-settings-group', 'blog_area_heading' );
        register_setting( 'welearner-blog-settings-group', 'blog_order_by' );
        register_setting( 'welearner-blog-settings-group', 'blog_order_sort' );
        register_setting( 'welearner-blog-settings-group', 'blog_post_offset' );
    }
}

// blog options
if (!function_exists('welearner_blog_func_settings')) {
    function welearner_blog_func_settings(){
    ?>
        <div class="wrap">
            <h1><?php echo esc_html__('Blog Setting', 'welearner-features '); ?> </h1>
            <hr>
            <form method="post" action="options.php">

                <?php
                    wp_nonce_field('update-blog-options');
                    settings_fields( 'welearner-blog-settings-group' );
                    do_settings_sections( 'welearner-blog-settings-group' );
                ?>

                <table class="form-table" role="presentation">
                    <tbody>
                        <tr>
                            <th>
                                <label for="blog_area_heading"><?php echo esc_html__('Heading Title', 'welearner-features'); ?></label>
                            </th>
                            <td>
                                <input type="text" placeholder="<?php echo esc_html__( 'Heading Title', 'welearner-features' )?>" class="regular-text" name="blog_area_heading" id="blog_area_heading" value="<?php echo esc_attr( get_option('blog_area_heading') ); ?>" />
                            </td>
                        </tr>
                        <!-- // blog title -->

                        <tr>
                            <th>
                                <label for="blog_area_items"><?php echo esc_html__('Items', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <input required placeholder="<?php echo esc_html__( 'Items', 'welearner-features' )?>" type="number" min="1" max="15" class="regular-text" name="blog_area_items" id="blog_area_items" value="<?php echo esc_attr( get_option('blog_area_items') ); ?>" />
                                <p class="description"><?php echo esc_html__( 'Minimum 1 maximum 15', 'welearner-features' )?></p>
                            </td>
                        </tr>
                        <!-- // blog item -->


                        <tr>
                            <th>
                                <label for="blog_order_by"><?php echo esc_html__('Order', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <select name="blog_order_by" id="blog_order_by">
                                    <option value="date" <?php if (get_option('blog_order_by') == 'date') echo ' selected="selected"'; ?>>Date</option>
                                    <option value="title" <?php if (get_option('blog_order_by') == 'title') echo ' selected="selected"'; ?>>Title</option>
                                    <option value="author" <?php if (get_option('blog_order_by') == 'author') echo ' selected="selected"'; ?>>Author</option>
                                    <option value="modified" <?php if (get_option('blog_order_by') == 'modified') echo ' selected="selected"'; ?>>Modified</option>
                                    <option value="comments" <?php if (get_option('blog_order_by') == 'comments') echo ' selected="selected"'; ?>>Comments</option>
                                </select>
                            </td>
                        </tr>
                        <!-- // blog order -->

                        <tr>
                            <th>
                                <label for="blog_order_sort"><?php echo esc_html__('Sort', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <select name="blog_order_sort" id="blog_order_sort">
                                    <option value="ASC" <?php if (get_option('blog_order_sort') == 'ASC') echo ' selected="selected"'; ?>>ASC</option>
                                    <option value="DESC" <?php if (get_option('blog_order_sort') == 'DESC') echo ' selected="selected"'; ?>>DESC</option>
                                </select>
                            </td>
                        </tr>
                        <!-- // blog order sort -->

                        <tr>
                            <th>
                                <label for="blog_post_offset"><?php echo esc_html__('Offset', 'welearner-features '); ?></label>
                            </th>
                            <td>
                                <input required type="number" class="regular-text" placeholder="<?php echo esc_html__( 'Offset', 'welearner-features' )?>" value="<?php echo esc_attr( get_option('blog_post_offset') ); ?>" name="blog_post_offset" min="0" max="20" id="blog_post_offset">
                                <p class="description"><?php echo esc_html__( 'Minimum 0 maximum 20', 'welearner-features' )?></p>
                            </td>
                        </tr>
                        <!-- // blog offset -->

                    </tbody>
                </table>
            <?php submit_button(); ?>
            </form>
        </div>
    <?php
    }
}