<?php ?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>

			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php date(red_starter_posted_on()); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
			<div class="read-more-button">
				<a href="<?php get_permalink(); ?>"><span>Read Entry</span></a>
			</div>
		</header><!-- .entry-header -->

	</article><!-- #post-## -->
