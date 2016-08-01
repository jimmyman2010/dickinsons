<?php
/**
 * The template for displaying search results pages
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
			<h1 class="title"><span><?php printf( __( 'Search Results for: %s', 'dickinsons' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></span></h1>
		</div>
		<div class="main-container clearfix">

			<section class="blog-content" role="main">

				<?php if ( have_posts() ) : ?>

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_format() );
					endwhile;

					get_template_part( 'template-parts/content', 'pagination' );

				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</section>

			<?php get_sidebar(); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>

