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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
