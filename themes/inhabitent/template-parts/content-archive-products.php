<?php
/**
 * Template part for displaying products (custom post type).
 *
 * @package RED_Starter_Theme
 */

?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">

			<a href="<?php $url; ?>" rel="bookmark">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
			</a>

			<div class="product-entry-meta">
			<?php the_title( sprintf( '<h2 class="entry-title"></h2>' ) ); ?>

			<?php if ( 'products' === get_post_type() ) : 

		 	 $price = CFS()->get('price'); ?>
			 <?php echo $price;  ?>
			</div><!-- .product-entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

	</article><!-- #post-## -->

