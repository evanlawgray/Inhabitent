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

// Add css to set the background image url for the About page hero image.

function inhabitent_about_image_css() {

    if ( ! is_page_template('page-templates/about.php') ) {
        return;
    } 

    $image = CFS()->get('about_header_image');

    if ( ! $image ) {
        return;
    }

    $hero_css = ".about-hero-image-banner{
        background:
        linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
        url({$image}) no-repeat center bottom;
        background-size: cover, cover;
    }";

    wp_add_inline_style( 'red-starter-style', $hero_css );
}

add_action('wp_enqueue_scripts', 'inhabitent_about_image_css');




