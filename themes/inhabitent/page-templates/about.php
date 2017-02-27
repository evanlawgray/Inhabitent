
<?php

/**
	* Template Name: About page
	*
	* @package Inhabitent Theme
	*/

get_header(); ?>

	<div id="primary" class="content-area">

			<div class="hero-image-banner">
				<h1 class="about-header">About</h1>
			</div>

		<main id="main" class="site-main" role="main">
			
			<h2 class="entry-header">Our Story</h2>
			<?php echo CFS()->get( 'about_our_story' ); ?>
			<h2 class="entry-header">Our Team</h2>
			<?php echo CFS()->get( 'about_our_team' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>