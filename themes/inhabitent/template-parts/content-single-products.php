<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="product-image-wrapper">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
		</div>

		<div class="entry-meta">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php $price = CFS()->get('price'); ?>

			<p class="price"><?php echo $price; ?></p>
	
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<div class="social-buttons">

				<button class="facebook-like-button"><i class="fa fa-facebook"></i>Like</button>
				<button class="twitter-tweet-button"><i class="fa fa-twitter"></i>Tweet</button>
				<button class="pinterest-pin-button"><i class="fa fa-pinterest"></i>Pin</button>
		
			</div><!-- .entry-footer -->	
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
</article><!-- #post-## -->
