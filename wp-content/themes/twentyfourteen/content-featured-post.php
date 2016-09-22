<?php
/**
 * The template for displaying featured posts on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<li>
	<?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?>
</li><!-- #post-## -->
