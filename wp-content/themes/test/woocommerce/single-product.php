<?php get_header( 'shop' );?>

<?php if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

	<!-- Breadcrumb Start -->
	<div class="container-fluid">
		<div class="row px-xl-5">
			<div class="col-12">
				<?php woocommerce_breadcrumb();?>
			</div>
		</div>
	</div>
	<!-- Breadcrumb End -->
<?php do_action( 'woocommerce_before_main_content' );?>

<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>

	<?php wc_get_template_part( 'content', 'single-product' ); ?>

<?php endwhile; // end of the loop. ?>

<?php do_action( 'woocommerce_after_main_content' );?>

<?php do_action( 'woocommerce_sidebar' );?>


<?php get_footer( 'shop' ); return; ?>
