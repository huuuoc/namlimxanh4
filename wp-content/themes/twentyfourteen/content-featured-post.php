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
	<a title="" href="<?php echo esc_url( get_permalink() )?>" rel="bookmark"><?php the_title(); ?></a>
</li><!-- #post-## -->
