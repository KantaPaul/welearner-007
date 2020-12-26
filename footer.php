<?php
    if (!defined('ABSPATH')) {
        die('Direct access forbidden.');
	}
	
	$footer_logo = "";
	$footer_text = "";
	$footer_background_image = "";
	$footer_background_color = "";
	$footer_social_profiles = [];
	if(defined('FW')) {
		$footer_logo = fw_get_db_customizer_option('footer_logo');
		$footer_text = fw_get_db_customizer_option('footer_text');
		$footer_social_profiles = fw_get_db_customizer_option('footer_social_profiles');
		$footer_background_image = fw_get_db_customizer_option('footer_background_image');
		$footer_background_color = fw_get_db_customizer_option('footer_background_color');
	} else {
		$footer_text = esc_html__( "Lorem ipsum dolor sit amet, consectetur 
		adipiscing elit. Sed justo nulla, ", 'welearner' );
		$footer_background_color = "#021E40";
	}
?>

<footer class="site-footer" style="background-color: <?php echo esc_attr( $footer_background_color ); ?>; <?php echo esc_attr( !empty($footer_background_image) ? "background-image: url(".$footer_background_image['url'].")" : ""); ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="footer_left_content">
					<a href="<?php echo home_url('/'); ?>" class="navbar-brand">
					<?php
						if (empty($footer_logo)) {
							bloginfo( 'name' );
						} else { ?>
							<img src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php bloginfo( 'name' ); ?>">
						<?php }
					?>
					</a>
					<?php if (!empty($footer_text)) { ?>
					<p class="footer_text"><?php echo esc_html( $footer_text ); ?></p>
					<?php }?>
					<?php if (is_array($footer_social_profiles) && !empty($footer_social_profiles)) { ?>
					<ul class="list-unstyled footer_social_icon">
						<?php foreach ($footer_social_profiles as $key => $value) { ?>
							<li><a href="<?php echo esc_url($value['footer_social_media_link']); ?>"><i class="<?php echo esc_attr($value['footer_social_icon']); ?>"></i></a></li>
						<?php } ?>
					</ul>
					<?php }; ?>
				</div>
			</div>
			<?php if(is_active_sidebar('widget_one') || is_active_sidebar('widget_two') || is_active_sidebar('widget_three') || is_active_sidebar('widget_four')){ ?>
			<div class="col-sm-8">
				<div class="footer-widget-wrapper">
					<div class="row">
						<?php if(is_active_sidebar('widget_one')){ ?>
						<div class="col-lg-3 col-md-6">
							<?php dynamic_sidebar('widget_one'); ?>
						</div>
						<?php } ?>
						<?php if(is_active_sidebar('widget_two')){ ?>
						<div class="col-lg-3 col-md-6">
							<?php dynamic_sidebar('widget_two'); ?>
						</div>
						<?php } ?>
						<?php if(is_active_sidebar('widget_three')){ ?>
						<div class="col-lg-3 col-md-6">
							<?php dynamic_sidebar('widget_three'); ?>
						</div>
						<?php } ?>
						<?php if(is_active_sidebar('widget_four')){ ?>
						<div class="col-lg-3 col-md-6">
							<?php dynamic_sidebar('widget_four'); ?>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</footer><!-- // site-footer -->


<?php wp_footer(); ?>
</div>

</body>
</html>
