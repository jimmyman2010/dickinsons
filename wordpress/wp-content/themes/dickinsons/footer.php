<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>

	<footer class="site-footer">
		<section class="footer--info">
			<div class="bar"></div>
			<div class="container">
				<div class="three-column">
					<div class="contact">
						<?= get_option('contact_' . ICL_LANGUAGE_CODE) ?>
					</div>

					<div class="latest-news">
						<?php echo dickinsons_recent_post(); ?>
						<a href="<?= get_option('all_articles_link_' . ICL_LANGUAGE_CODE) ?>" class="button button--yellow button--icon"><i class="fa fa-newspaper-o"></i> <?= get_option('all_articles_' . ICL_LANGUAGE_CODE) ?></a>
					</div>

					<div class="quotes">
						<?php echo ab_arq_generate(); ?>
					</div>
				</div>
				<div class="subscribe">
					<div class="subscribe-form">
						<p>Subscribe to our mailing list</p>
						<div class="form">
							<input type="text" placeholder="email address" />
							<button>Subscribe</button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="copyright">
			<div class="container clearfix">
				<?php
				if ( has_nav_menu( 'footer' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'footer',
						'menu_class' => 'nav',
						'container' => 'ul'
					) );
				} ?>

				<div class="copy">
					<p>
						<?= get_option('copyright_' . ICL_LANGUAGE_CODE) ?>
					</p>
				</div>
			</div>
		</section>
	</footer>

</div>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "f5aa822b-dd9d-40c5-ab1d-949e4ccb9e9c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<?php wp_footer(); ?>
</body>
</html>
