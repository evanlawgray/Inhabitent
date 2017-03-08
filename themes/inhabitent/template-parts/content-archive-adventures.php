<?php
/**
 * Template part for displaying the content of the Adventures archive (custom post type).
 *
 * @package RED_Starter_Theme
 */

?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">

			<div class="adventure-image-wrapper">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
			</div>

			<div class="adventure-entry-meta">
				<a href="<?php echo get_permalink(); ?>">
					<h2 class="entry-title"><?php echo the_title(); ?></h2>
				</a>
				<a class="adventure-button" href="<?php echo get_permalink();?>">Read More</a>	
			</div><!-- .adventure-entry-meta -->

		</header><!-- .entry-header -->

	</article><!-- #post-## -->

