
<?php

/**
	* Template Name: About page
	*
	* @package Inhabitent Theme
	*/

get_header(); ?>

	<div id="primary" class="content-area">

		<?php 

				$image_url = CFS()->get('about_header_image');
				$stylesheet_uri = get_stylesheet_uri();

				wp_enqueue_style(
   					'custom-style',
    				get_stylesheet_uri()
					); ?>

				<?php wp_add_inline_style( 'custom-style', '.about-hero-image-banner{background:
					linear-gradient(
		  		rgba(0,0,0, 0.4) 0%,
		  		rgba(0,0,0, 0.4) 100%),
		  		url("' . $image_url . '")}' ); ?>

			<div class="about-hero-image-banner">
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