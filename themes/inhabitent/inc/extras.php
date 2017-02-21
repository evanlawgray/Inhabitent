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
    </style>
<?php }

add_filter( 'login_head', 'my_login_logo' );

function my_login_logo_link() {
	return '<?php echo get_home_url(); ?>';
}

add_filter ( 'login_headerurl', 'my_login_logo_link');
