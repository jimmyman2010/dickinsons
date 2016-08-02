<?php
/**
 * Template Name: Yellow Template Page
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */

get_header(); ?>

<script> document.getElementById('site-container').className += ' yellow-template'; </script>

<main class="site-main">

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the page content template.
		get_template_part( 'template-parts/content', 'page' );

		// End of the loop.
	endwhile;
	?>

</main>
<?php get_footer(); ?>