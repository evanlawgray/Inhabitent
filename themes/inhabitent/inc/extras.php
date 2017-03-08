<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Change logo in header of login page to the Inhabitent logo

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-text-dark.svg);
            width: 320px;
            margin: 0 auto;
            background-size: 100%;
        }
        #login .button.button-primary {
            background-color: #248A83;
            border: 1px solid #248A83;
        }
    </style>
<?php }

add_action( 'login_head', 'my_login_logo' );

function my_login_logo_link($url) {
	return home_url();
}

add_action ( 'login_headerurl', 'my_login_logo_link');

//Change logo text to Inhabitent

function my_login_logo_title() {
    return "Inhabitent";
}

add_filter( 'login_headertitle', 'my_login_logo_title' );

// Get product types (custom taxonomy) to add into shop index page.

function wc_get_product_types() {
  return (array) apply_filters( 'product_type_selector', array(
    'simple'   => __( 'Simple product', 'inhabitent' ),
    'grouped'  => __( 'Grouped product', 'inhabitent' ),
    'external' => __( 'External/Affiliate product', 'inhabitent' ),
    'variable' => __( 'Variable product', 'inhabitent' )
  ) );
}

// Get the title for the shop page


function product_archive_title($title) {
    if(is_post_type_archive('products')) {
        $title = 'Shop Stuff';
    }
    return $title;
}

add_filter('get_the_archive_title', 'product_archive_title');


// Add css to set the background image url for the About page hero image.

function inhabitent_about_image_css() {

    if ( ! is_page_template('page-templates/about.php') ) {
        return;
    } 

    $image = CFS()->get('about_header_image');

    if ( ! $image ) {
        return;
    }

    $hero_css = ".hero-image-banner{
        background:
        linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
        url({$image}) no-repeat center bottom;
        background-size: cover, cover;
    }";

    wp_add_inline_style( 'red-starter-style', $hero_css );
}

add_action('wp_enqueue_scripts', 'inhabitent_about_image_css');


// Insert custom query for the shop/products archives page

function make_shop_archive_query($query){
    if ( $query->is_main_query() && (is_post_type_archive('products') || is_tax() ) ){

            $query->set('orderby', 'title');
            $query->set('post_type', 'products');
            $query->set('order', 'ASC');
            $query->set('posts_per_page', '16');
    }
}

add_action('pre_get_posts', 'make_shop_archive_query');


// Get title for product archive page

function modify_product_archive_title($title) {
    if ( is_post_type_archive('products') ) {
        $title = 'Shop Stuff';
    }

    return $title;
}

add_filter('get_the_archive_title', 'modify_product_archive_title');

// Get title for product category archive page

function modify_product_single_title($title) {
 
    $terms = get_terms( array(
        'taxonomy' => 'product_type',
        'orderby' => 'name',
        'hide_empty' => false) );

    foreach ($terms as $term) :
    $url = get_term_link($term->slug , 'product_type'); 
    endforeach;   

    if ( is_post_type_archive($term->slug) ) {
        $title = $term->slug;
    }

    return $title;
}

// Insert custom query for the shop/products archives page

function make_adventures_archive_query($query){
    if ( $query->is_main_query() && (is_post_type_archive('adventures') ) ){

            $query->set('orderby', 'date');
            $query->set('post_type', 'adventures');
            $query->set('posts_per_page', '0');
    }
}

add_action('pre_get_posts', 'make_adventures_archive_query');

// Alter the text excerpt for blog posts to add ellipses and read more link.


function red_wp_trim_excerpt( $text ) {
    $raw_excerpt = $text;
    
    if ( '' == $text ) {
        // retrieve the post content
        $text = get_the_content('');
        
        // delete all shortcode tags from the content
        $text = strip_shortcodes( $text );
        
        $text = apply_filters( 'the_content', $text );
        $text = str_replace( ']]>', ']]&gt;', $text );
        
        // indicate allowable tags
        $allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
        $text = strip_tags( $text, $allowed_tags );
        
        // change to desired word count
        $excerpt_word_count = 50;
        $excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );
        
        // create a custom "more" link
        $excerpt_end = '<div class="read-more-button">
            <a href="' . get_permalink() . '">Read More<span class="arrow">   &rarr;</span></a>
            </div>'; // modify excerpt ending
        $excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );
        
        // add the elipsis and link to the end if the word count is longer than the excerpt
        $words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );
        
        if ( count( $words ) > $excerpt_length ) {
            array_pop( $words );
            $text = implode( ' ', $words );
            $text = $text . $excerpt_more;
        } else {
            $text = implode( ' ', $words );
        }
    }
    
    return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}

remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'red_wp_trim_excerpt' );
