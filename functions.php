<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 'extraire_nouvelles' );

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function extraire_nouvelles($query2) {
    if ($query2->is_category('nouvelle')) {
      $query2->set( 'posts_per_page', 5 );
      $query2->set( 'orderby', 'title' );
      $query2->set( 'order', 'asc' );
    }
}
?>