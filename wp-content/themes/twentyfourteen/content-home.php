<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" class="first">
	<?php twentyfourteen_post_thumbnail(); ?>
	<div class="desc-title">
		<h2 class=""><a title="<?php echo get_the_title() ;?>" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
			<?php
				$title = get_the_title();
				cutString($title, 73);
				echo $title;
			?>
		</a></h2>
		<div class="entry-summary">
			<?php 
				$content = get_the_excerpt(); 
				cutString($content, 200);
				echo $content;
			?>
		</div><!-- .entry-summary -->
	</div>
</article><!-- #post-## -->
