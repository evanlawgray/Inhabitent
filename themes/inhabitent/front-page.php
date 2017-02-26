<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="hero-image-banner"></div>

		<div class="shopstuff-container">

			<h2> Shop Stuff </h2>

			<?php 
				$terms = get_terms( array(
					'taxonomy' => 'product_type',
					'orderby' => 'name',
					));

				foreach ($terms as $term) :
	        $url = get_term_link($term->slug , 'product_type');    
			?>

			<div class="shop-stuff-item">
	      <div class="product-icon-image">       
	        <img src="<?php echo get_template_directory_uri();?>/images/product-type-icons/<?php echo $term->slug; ?>.svg" alt="">
	      </div>

	      <p> <?php echo $term->description; ?> </p>
	         
	      <a href='<?php echo $url?>' class='button-link'><?php echo $term->name; ?></a>

	    </div>

	    <?php endforeach; ?>

  	</div>

    <div class="front-page-posts-wrapper">

			<?php
		   $args = array( 'post_type' => 'post', 'order' => 'DSC', 'numberposts' => 3 );
		   $product_posts = get_posts( $args ); // returns an array of posts
			?>

			<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
		  <?php get_template_part( 'template-parts/content-front-page-posts' ); ?>
			<?php endforeach; wp_reset_postdata(); ?>

		</div>

		<h2>Latest Adventures</h2>

		<div class="adventures-container">

	  	<div class="adventures-block-left">
	  		<div class="adventure">
		  		<h3 class="adventure-title">Getting Back to Nature in a Canoe</h3>
		  		<a class="adventure-button" href="#">Read More</a>
		  	</div>
	  	</div>

	  	<div class="adventures-block-right">
		  	<div class="adventure">
		  		<h3 class="adventure-title">A Night with Friends at the Beach</h3>
		  		<a class="adventure-button" href="#">Read More</a>
		  	</div>
		  	<div class="adventure">
		  		<h3 class="adventure-title">Taking in the View at Big Mountain</h3>
		  		<a class="adventure-button" href="#">Read More</a>
		  	</div>
		  	<div class="adventure">
		  		<h3 class="adventure-title">Star-Gazing at the Night Sky</h3>
		  		<a class="adventure-button" href="#">Read More</a>
		  	</div>
		  </div>

		  <a class="more-adventures-button">More Adventures</a>

		</div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
