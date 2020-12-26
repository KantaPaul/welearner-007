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
<div class="container">
    <div class="text-center client-section-title-wraper">
        <p class="client-section-title"><?php echo esc_html($client__title) ?> </p>
    </div>
    <!-- // heading -->
    <div class="d-lg-flex justify-content-between align-items-center">
        <?php
        if(!empty($client_logos)) {
            $client_logo_col = count($client_logos);
            foreach($client_logos as $logo) {
                if (!empty($logo)) {
            ?>
            <div class="clinet-logo">
                <?php echo wp_get_attachment_image($logo['attachment_id'], 'full'); ?>
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
<!-- // client section -->