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

		<div class="front-page-posts-wrapper">

		<?php 
			$terms = get_terms( array(
				'taxonomy' => 'product_type',
				'orderby' => 'name',) );

			foreach ($terms as $term) :
        $url = get_term_link ($term->slug , 'product_type');    
		?>

		<div class="shop-stuff-item">
      <div class="product-icon-image">       
        <img src="<?php echo get_template_directory_uri();?>/images/<?php echo $term->slug; ?>.svg" alt="">
      </div>
      <p> <?php echo $term->description; ?> </p>
         
      <button><a href='<?php echo $url?>' class='button-link'><?php echo $term->name; ?></a></button>
    </div>

    <?php endforeach; ?>

		<?php
	   $args = array( 'post_type' => 'post', 'order' => 'DSC', 'numberposts' => 3 );
	   $product_posts = get_posts( $args ); // returns an array of posts
		?>

			<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
		  <?php get_template_part( 'template-parts/content-front-page' ); ?>
			<?php endforeach; wp_reset_postdata(); ?>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
