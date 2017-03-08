
<?php

/**
	* Template for displaying single adventures.
	*
	* @package Inhabitent Theme
	*/

get_header(); ?>

	<div id="primary" class="content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single-adventures' ); ?>

		<?php endwhile; // End of the loop. ?>

	</div><!-- #primary -->

<?php get_footer(); ?>