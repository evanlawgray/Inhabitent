<?php
/**
 * The template for displaying the Product archive page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php if ( have_posts() ) : ?>

			<header class="page-header">

			<?php 
				$term_id = get_queried_object_id();
				$category = get_term($term_id, 'product_type');
			?>

			<h1 class="page-title">
			<?php echo $category->name; ?>
			</h1>

			<p class="category-description"><?php echo $category->description; ?></p>


			<?php 
				$terms = get_terms( array(
					'taxonomy' => 'product_type',
					'orderby' => 'name',
					'hide_empty' => false) );?>

			</header><!-- .page-header -->

			<div class="shop-content-wrapper">

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content-archive-products' );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
