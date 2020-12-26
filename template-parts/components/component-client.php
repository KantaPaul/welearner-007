<?php

if (!defined('ABSPATH')) {
    die('Direct access forbidden.');
}

$client_logos  = [];
$client__title = "";

if(defined('FW')) {
    $client_logos  = fw_get_db_customizer_option('client_logos');
    $client__title = fw_get_db_customizer_option('client__title');
} else {
    $client__title = "45+ million people are already learning on Welearners";
}
?>
<div class="welearner-section-client default-spacer">
    <div class="container">
        <div class="text-center">
            <p class="client-section-title"><?php echo esc_html($client__title) ?> </p>
        </div>
        <!-- // heading -->
        <div class="row">
            <?php
            if(!empty($client_logos)) {
                $client_logo_col = count($client_logos);
                foreach($client_logos as $logo) {
                    if (!empty($logo)) {
                ?>
                <div class="col">
                    <div class="clinet-logo">
                        <?php echo wp_get_attachment_image($logo['attachment_id'], 'full'); ?>
                    </div>
                </div>
                <!-- // client logo -->
                <?php
                    }
                }
            }
            ?>
        </div>
        <!-- // row -->
    </div>
    <!-- // container -->
</div>
<!-- // client section -->