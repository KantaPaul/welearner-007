<?php

namespace Welearner\Heading;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if (!class_exists('Welearner_Heading_Class')) {
    class Welearner_Heading_Class {

        public $heading_title;
        public $button_text;
        public $button_url;

        public function __construct($heading_title, $button_text, $button_url) {
            $this->heading_title = $heading_title;
            $this->button_text = $button_text;
            $this->button_url = $button_url;

            return $this->get_heading_title();
        }

        public function get_heading_title() {
            if (!empty($this->heading_title) || (!empty($this->button_url) && !empty($this->button_text))) {
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="welearner-section-title-wraper d-flex justify-content-between align-items-center">
                        <?php if (!empty($this->heading_title)) { ?>
                        <h2 class="welearner-section-title"><?php echo esc_html($this->heading_title); ?></h2>
                        <?php }?>
                        <?php if (!empty($this->button_url) && !empty($this->button_text)) { ?>
                        <a href="<?php echo esc_url( $this->button_url )?>" class="btn btn-primary"><?php echo esc_html($this->button_text); ?> </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php }
        }
    }
}