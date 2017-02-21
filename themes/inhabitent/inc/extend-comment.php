<?php
/*
Plugin Name: Extend Comment
Version: 1.0
Description: A plugin to add fields to the comment form.
Author: Specky Geek (modified by Evan Gray)
*/

// Add custom meta (ratings) fields to the default comment form
// Default comment form includes name, email address and website URL
// Default comment form elements are hidden when user is logged in

add_filter('comment_form_default_fields', 'custom_fields');
function custom_fields($fields) {

    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $fields[ 'author' ] = '<p class="comment-form-author">'.
      '<label for="author">' . __( 'Name' ) . '</label>'.
      ( $req ? '<span class="required">*</span>' : '' ).
      '<input id="author" name="author" type="text" value="'. esc_attr( $commenter['comment_author'] ) .
      '" size="30" tabindex="1"' . $aria_req . ' /></p>';

    $fields[ 'email' ] = '<p class="comment-form-email">'.
      '<label for="email">' . __( 'Email' ) . '</label>'.
      ( $req ? '<span class="required">*</span>' : '' ).
      '<input id="email" name="email" type="text" value="'. esc_attr( $commenter['comment_author_email'] ) .
      '" size="30"  tabindex="2"' . $aria_req . ' /></p>';

    $fields[ 'url' ] = '<p class="comment-form-url">'.
      '<label for="url">' . __( 'Website' ) . '</label>'.
      '<input id="url" name="url" type="text" value="'. esc_attr( $commenter['comment_author_url'] ) .
      '" size="30"  tabindex="3" /></p>';


  return $fields;
}

// Add fields after default fields above the comment box, always visible

add_action( 'comment_form_logged_in_after', 'additional_fields' );
add_action( 'comment_form_after_fields', 'additional_fields' );

function additional_fields () {
  echo '<p class="comment-form-title">'.
  '<label for="title">' . __( 'Comment Title' ) . '</label>'.
  '<input id="title" name="title" type="text" size="30"  tabindex="5" /></p>';

  echo '<p class="comment-form-rating">'.
  '<label for="rating">'. __('Rating') . '<span class="required">*</span></label>
  <span class="commentratingbox">';

    //Current rating scale is 1 to 5. If you want the scale to be 1 to 10, then set the value of $i to 10.
    for( $i=1; $i <= 5; $i++ )
    echo '<span class="commentrating"><input type="radio" name="rating" id="rating" value="'. $i .'"/>'. $i .'</span>';

  echo'</span></p>';

}