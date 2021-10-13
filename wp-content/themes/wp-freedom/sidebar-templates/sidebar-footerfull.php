<?php
/**
 * Sidebar setup for footer full
 *
 * @package FreedomTheme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'cf_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="bg-light text-black" id="wrapper-footer-full">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

			<?php dynamic_sidebar( 'footerfull' ); ?>

		</div>

	</div><!-- #wrapper-footer-full -->

	<?php
endif;
