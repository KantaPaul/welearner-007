<?php
    if (!defined('ABSPATH')) {
        die('Direct access forbidden.');
    }

    $topic_area_heading     = get_option('topic_area_heading', 'Popular Topics');
    $topic_area_button_text = get_option('topic_area_button_text', 'Show All');
    $topic_area_button_url  = get_option('topic_area_button_url', '#');
    $topic_total_items      = get_option('topic_total_items', 8);

    $topics = get_terms( array(
        'taxonomy'   => 'topic',
        'hide_empty' => false,
        'number'     => $topic_total_items,
    ) );
?>
<?php if (is_array($topics) && !empty($topics)) { ?>
<section class="welearner-section-topic" id="topic_section">
    <div class="container">
        <?php
            new Welearner\Heading\Welearner_Heading_Class($topic_area_heading, $topic_area_button_text, $topic_area_button_url);
        ?>
        <div class="disply-topic">
            <div class="row">
                <?php
                foreach($topics as $topic) {

                    $topic_icon_image = [];
                    $topic_icon_background = '#C7C5F6';
                    $topic_icon__color = '#0A00F2';

                    if(defined('FW')){
                        if (fw_get_db_term_option($topic->term_id, 'topic', 'topic_icon_bg_color') != '') {
                            $topic_icon_background = fw_get_db_term_option($topic->term_id, 'topic', 'topic_icon_bg_color');
                        } else {
                            $topic_icon_background = "#C7C5F6";
                        }

                        if (fw_get_db_term_option($topic->term_id, 'topic', 'topic_icon__color') != '') {
                            $topic_icon__color = fw_get_db_term_option($topic->term_id, 'topic', 'topic_icon__color');
                        } else {
                            $topic_icon__color = "#0A00F2";
                        }

                        $topic_icon_image = fw_get_db_term_option($topic->term_id, 'topic', 'topic_product_cat');
                    }

                    $topic_icon_id = '';
                    if(array_key_exists('type', $topic_icon_image) && $topic_icon_image != '') {
                        if($topic_icon_image['type'] == 'custom-upload') {
                            $topic_icon_id = $topic_icon_image['attachment-id'];
                        }
                    }
                ?>
                    <div class="col-md-6 col-lg-3">
                        <a href="<?php echo esc_url(get_term_link($topic->slug, 'topic')); ?>" class="welearner-topic-list media align-items-center">
                            <div class="topic_icon d-flex justify-content-center align-items-center" style="background-color: <?php echo esc_attr( $topic_icon_background )?>">
                                <?php
                                if('' != $topic_icon_id) {
                                $icon_url = wp_get_attachment_image_src($topic_icon_id, [56, 57]);
                                ?>
                                <img src="<?php echo esc_url($icon_url[0]); ?>" alt="<?php echo esc_html($topic->name); ?>" title="<?php echo esc_html($topic->name); ?>">
                                <?php }; ?>
                                <?php
                                if($topic_icon_image['type'] != 'custom-upload' && $topic_icon_image != '') {
                                ?>
                                <i style="color: <?php echo esc_attr( $topic_icon__color ); ?>" class="<?php echo esc_attr( $topic_icon_image['icon-class'] )?>"></i>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="topic-content">
                                <?php echo esc_html($topic->name); ?>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- // topic section -->
<?php } ?>