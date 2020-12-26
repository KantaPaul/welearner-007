<?php
    if (!defined('ABSPATH')) {
        die('Direct access forbidden.');
    }
     
    $call_to_action_content = [];

    if(defined('FW')) {
        $call_to_action_content = fw_get_db_customizer_option('call_to_action_content');
    }

if (!empty($call_to_action_content) && is_array($call_to_action_content)) {
?>
<div class="coll-to-action-secton">
    <div class="container">
        <div class="row">
            <?php
                $CTA_total_col = count($call_to_action_content);
                foreach ($call_to_action_content as $key => $value) {
                ?>
                <div class="col-lg-<?php echo esc_attr( 12 / $CTA_total_col )?>">
                    <div class="single_call_to_action text-center" style="background-color: <?php echo esc_attr( $value['call_to_action_bg'] ); ?>">
                        <?php if (!empty($value['call_to_action_title'])) { ?>
                        <h2 class="call_to_action_title"><?php echo esc_html( $value['call_to_action_title'] ); ?></h2>
                        <!-- // call to action title -->
                        <?php } ?>

                        <?php if (!empty($value['call_to_action_exerpt'])) { ?>
                        <p class="call_to_action_exerpt"><?php echo esc_html( $value['call_to_action_exerpt'] ); ?></p>
                        <!-- // call to action title -->
                        <?php } ?>

                        <?php if (!empty($value['call_to_action_button_title']) && !empty($value['call_to_action_button_url'])) { ?>
                        <a href="<?php echo esc_attr( $value['call_to_action_button_url'] ); ?>" class="btn btn-light"><?php echo esc_html( $value['call_to_action_button_title'] ); ?></a>
                        <!-- // call to action button -->
                        <?php } ?>
                    </div>
                </div>
                <?php
                }
            ?>
        </div>
    </div>
</div>
<!-- // call to action -->
<?php
}