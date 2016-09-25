<?php
/**
 * The template for displaying featured posts on the front page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<h2 class=""><a title="<?php echo get_the_title() ;?>" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
		<?php
			$title = get_the_title();
			cutString($title, 73);
			echo $title;
		?>
	</a></h2>
</article><!-- #post-## -->