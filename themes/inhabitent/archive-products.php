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
	
			the_archive_title( '<h1 class="page-title">', '</h1>' );
/*			the_archive_description( '<div class="taxonomy-description">', '</div>' );
			echo the_archive_description();*/
			?>

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
