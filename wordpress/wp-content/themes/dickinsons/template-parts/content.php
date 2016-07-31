<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article class="item">
	<figure>
		<?php dickinsons_post_thumbnail(); ?>
		<figcaption>
			<?php dickinsons_entry_tag(false); ?>
		</figcaption>
	</figure>

	<div class="details">
		<?php the_title( sprintf( '<h2><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<div class="meta">
			<?php dickinsons_entry_date(); ?> | <?php dickinsons_entry_category(); ?>
		</div>

		<?php dickinsons_excerpt(); ?>
	</div>
</article>



