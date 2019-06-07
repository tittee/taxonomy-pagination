<?php
$option_posts_per_page = get_option( 'posts_per_page' );
add_action( 'init', 'my_modify_posts_per_page', 0);

function my_modify_posts_per_page() {
	add_filter( 'option_posts_per_page', 'my_option_posts_per_page' );
}

function my_option_posts_per_page( $value ) {
  global $option_posts_per_page;
  if ( is_tax( 'product_category') ) {
    return 6;
  } else {
    return $option_posts_per_page;
  }
}
