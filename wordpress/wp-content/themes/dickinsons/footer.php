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
						<p class="btn-cart">
							<a href="#" class="button button--red button--icon"><i class="fa fa-shopping-cart"></i> Where to buy</a>
						</p>
						<h3>Contact</h3>
						<p>561 Điện Biên Phủ, Phường 25, Bình Thạnh, Hồ Chí Minh, Vietnam
							<br>email: <a href="mailto:info@dickinsonsbrands.vn">info@dickinsonsbrands.vn</a>
							<br>phone: +84 098 888 888</p>
						<p class="btn-envelope"><a href="#" class="button button--yellow button--icon"><i class="fa fa-envelope-o"></i>Contact us</a></p>
						<p class="follows">
							<a href="#" class="facebook"><img src="<?= get_template_directory_uri(); ?>/images/follow-facebook.jpg" alt="Follow us on Facebook" /></a>
							<a href="#" class="twitter"><img src="<?= get_template_directory_uri(); ?>/images/follow-twitter.jpg" alt="follow us on Twitter" /></a>
						</p>
					</div>

					<div class="latest-news">
						<h3>Our Blog</h3>
						<ul>
							<li><a href="#">At vero eos et accusamus et iusto odio dignissims dicumes qui blanditilis</a></li>
							<li><a href="#">At vero eos et accusamus et iusto odio dignissims dicumes qui blanditilis</a></li>
							<li><a href="#">At vero eos et accusamus et iusto odio dignissims dicumes qui blanditilis</a></li>
							<li><a href="#">At vero eos et accusamus et iusto odio dignissims dicumes qui blanditilis</a></li>
						</ul>
						<a href="#" class="button button--yellow button--icon"><i class="fa fa-newspaper-o"></i> All articles</a>
					</div>

					<div class="quotes">
						<blockquote><span>"</span>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et placerat velit, nec lacinia est. Fusce convallis tortor nec enim pretium, et bibendum risus egestas.
							<br><br>Nulla eu fermentum ex. Donec euismod, magna ac porta faucibus, libero dolor pulvinar nunc, vel porttitor magna leo sed velit.
							<span>"</span></blockquote>
						<p>- Hala Motiva</p>
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
					<p>&copy; 2016 Dickinson Brands Inc., All Rights Reserved.
						<br>This site is published by Dickinson Brands VN and is intended for visitors
						<br>from the Vietnam only.</p>
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
