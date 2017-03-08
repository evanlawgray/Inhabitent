<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<div class="adventures-hero-banner">
	<?php if ( has_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'full' ); ?>
	<?php endif; ?>
</div>

<main id="main" class="site-main" role="main">

	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<p class="author"><?php red_starter_posted_by(); ?></p>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php the_content(); ?>
			
	</article>

	<div class="social-buttons">

				<button class="facebook-like-button"><i class="fa fa-facebook"></i>Like</button>
				<button class="twitter-tweet-button"><i class="fa fa-twitter"></i>Tweet</button>
				<button class="pinterest-pin-button"><i class="fa fa-pinterest"></i>Pin</button>
		
	</div><!-- .entry-footer -->	

</main>