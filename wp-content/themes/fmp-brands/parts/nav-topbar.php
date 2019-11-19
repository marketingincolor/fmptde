<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/responsive-navigation/
 */
$custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
?>

<div class="top-bar" id="main-menu">
	<div class="top-bar-left">
		<ul class="menu">
			<li><a href="<?php echo home_url(); ?>"><?php echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">'; ?></a></li>
		</ul>
	</div>
	<div class="top-bar-right">
		<?php joints_top_nav(); ?>
	</div>
</div>