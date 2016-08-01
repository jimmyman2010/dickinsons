<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<main class="site-main">
	<div class="container">
		<div class="site-title">
			<?php dickinsons_the_breadcrumbs(); ?>
			<h1 class="title"><span><?php _e( 'Page not found.', 'dickinsons' ); ?></span></h1>
		</div>
	</div>
	<div class="main-container clearfix">
		<div class="container">
			<article class="site-article" role="main">
				<div class="site-article--content body">
					<h3 class="title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'dickinsons' ); ?></h3>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'dickinsons' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</article>
		</div>

	</div>

</main>
<?php get_footer(); ?>
