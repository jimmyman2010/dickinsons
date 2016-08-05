<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar' )  ) : ?>
	<aside class="left-rail" role="complementary">
		<?php dynamic_sidebar( 'sidebar' ); ?>

		<div class="module module--products">
			<h3 class="module--title">Our Products</h3>
			<div class="module--content">
				<a href="#" class="button button--yellow">Yellow Label Products</a>
				<a href="#" class="button button--blue">Blue Label Products</a>
			</div>
		</div>

	</aside>
<?php endif; ?>


