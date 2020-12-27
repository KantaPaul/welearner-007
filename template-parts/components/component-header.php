<?php
if (!defined('ABSPATH')) {
    die('Direct access forbidden.');
}
;
$header_button_two_title = get_option('header_button_two_title', 'Get Started');
$header_button_two_url   = get_option('header_button_two_url', '#');
$header_button_two_show  = get_option('header_button_two_show', 'true');

// button two show
if (!empty($header_button_two_show)) {
    $header_button_two_show = "true";
} else {
    $header_button_two_show = "false";
}

?>
<header class="header-standard header-light header-fixed">
	<div class="container">
		<div class="navbar navbar-expand-lg">
			<?php if(has_custom_logo()) {
				the_custom_logo();
			} else { ?>
			<a href="<?php echo home_url( '/' ); ?>" class="navbar-brand">
				<?php bloginfo( 'name' ); ?>
			</a>
			<?php } ?>
			<!-- // navbar brand -->
			<?php if (has_nav_menu('primary_menu')) { ?>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary_nav" aria-controls="primary_nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- // navbar toggle -->
			<?php } ?>
			<div class="collapse navbar-collapse" id="primary_nav">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary_menu',
							'menu_id'        => 'primary-menu',
							'container'		 => '',
							'menu_class'     => 'navbar-nav ml-auto',
							'fallback_cb'     => false,
						)
					);
				?>
				<!-- // navbar-nav ml-auto -->
				<ul class="header_control list-unstyled <?php echo esc_attr( has_nav_menu('primary_menu') ? "": "ml-auto")?>">
					<li>
						<?php if (is_user_logged_in()) { ?>
						<a class="btn-login" href="<?php echo wp_logout_url(); ?>" title="<?php esc_attr_e( 'Logout', 'welearner' ); ?>">
							<?php echo esc_html__( 'Logout', 'welearner' ); ?>
						</a>
						<!-- // logout button -->
						<?php } else { ?>
						<a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>" title="<?php esc_attr_e( 'Login', 'welearner' ); ?>" class="btn btn-link">
							<?php echo esc_html__( 'Login', 'welearner' ); ?>
						</a>
						<!-- // login button -->
						<?php } ?>
					</li>

					<?php if (!empty($header_button_two_title) || $header_button_two_show === "true") { ?>
					<li>
						<a href="<?php echo esc_url( $header_button_two_url ); ?>" title="<?php esc_attr_e( 'Login' ); ?>" class="btn btn-header">
							<?php echo esc_html( $header_button_two_title ); ?>
						</a>
						<!-- // button two -->
					</li>
					<?php }	?>
				</ul>
				<!-- // header control -->
			</div>
			<!-- // navbar collapse -->
		</div>
		<!-- // navbar expand -->
	</div>
	<!-- // container -->
</header>
<!-- // header -->