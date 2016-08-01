<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="container">
	<div class="site-title">
		<?php dickinsons_the_breadcrumbs(); ?>
		<?php the_title( '<h1 class="title"><span>', '</span></h1>' ); ?>
	</div>
</div>
<div class="main-container clearfix">
	<div class="container">
		<article class="site-article" role="main">

			<?php dickinsons_post_thumbnail(); ?>

			<div class="site-article--content body">
				<?php the_content(); ?>
			</div>
		</article>
	</div>

</div>