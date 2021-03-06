<?php
/**
 * The Template for standard post format.
 *
 * @package WordPress
 * @subpackage Bloq
 * @since Bloq 1.0
 */
?>
<?php global $spacing; ?>
<div class="col span_9" style="margin-top: <?php echo $spacing ?>px;">
	<article>
		<?php the_title('<h1 class="post-title">', '</h1>'); ?>
		
		<?php the_content(); ?>
		<ul id="navigation">
			<li><?php previous_post_link('%link', __('<span class="pictogram post-nav">&#59225;</span> Previous', 'themelovin')); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li><?php next_post_link('%link', __('<span class="pictogram post-nav">&#59226;</span> Next', 'themelovin')); ?></li>
		</ul>
	</article>
	<?php comments_template(); ?>
</div>
<aside class="col span_3" style="margin-top: <?php echo $spacing ?>px;">
	<?php require 'widgets/board.php' ?>
	<?php require 'widgets/folio.php' ?>
</aside>