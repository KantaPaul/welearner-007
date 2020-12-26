<?php

if (!defined('ABSPATH')) {
    die('Direct access forbidden.');
}

$counter_up_content = [];
if(defined('FW')) {
    $counter_up_content = fw_get_db_customizer_option('counter_up_content');
}
?>

<div class="welearner-section-counter">
    <div class="container">
        <div class="row">
            <?php
                if (is_array($counter_up_content) && !empty($counter_up_content)) {
                    foreach ($counter_up_content as $key => $value) {
                        ?>
                        <div class="col-lg-4 col-md-5">
                            <div class="single-counter">
                                <?php if (!empty($value['counter_up_count']) || !empty($value['counter_up_suffix'])) { ?>
                                <h2 class="counter-content">
                                    <?php if (!empty($value['counter_up_count'])) { ?>
                                    <span class="counter_up_count"><?php echo esc_html( $value['counter_up_count'] ); ?></span>
                                    <!-- // counter count -->
                                    <?php } ?>

                                    <?php if (!empty($value['counter_up_suffix'])) { ?>
                                    <span class="counter_up_suffix"><?php echo esc_html( $value['counter_up_suffix'] ); ?></span>
                                    <!-- // counter suffix -->
                                    <?php } ?>
                                    </h2>
                                <!-- // counter content -->
                                <?php } ?>

                                <?php if (!empty($value['counter_up_title'])) { ?>
                                <h3 class="counter_up_title">
                                    <?php echo esc_html( $value['counter_up_title'] ); ?>
                                </h3>
                                <!-- // counter up title -->
                                <?php } ?>
                            </div>
                            <!-- // single counter -->
                        </div>
                        <!-- // end column -->
                        <?php
                    }
                }
            ?>
        </div>
        <!-- // row -->
    </div>
    <!-- // container -->
</div>
<!-- // counter section end -->