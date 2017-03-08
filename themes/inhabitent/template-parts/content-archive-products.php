<?php
/**
 * Template part for displaying the content of the products archive (custom post type).
 *
 * @package RED_Starter_Theme
 */

?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">

			<div class="product-image-wrapper">
				<a href="<?php echo get_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
				</a>
			</div>

			<div class="product-entry-meta">
				<div class="ellipses">.........................................................</div>
				<h2 class="entry-title"><?php echo the_title(); ?></h2>

				<?php if ( 'products' === get_post_type() ) : 

			 	 $price = CFS()->get('price'); ?>
				 <p class="price"><?php echo $price;  ?></p>
			</div><!-- .product-entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

	</article><!-- #post-## -->

