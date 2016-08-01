<?php
/**
 * The template used for displaying page content
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>

<div class="container">
	<div class="site-title">
		<?php dickinsons_the_breadcrumbs(); ?>
		<?php the_title( '<h1 class="title"><span>', '</span></h1>' ); ?>
	</div>
</div>
<article class="main-container clearfix">

	<?php the_content(); ?>

</article>