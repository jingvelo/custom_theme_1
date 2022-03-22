<?php

// Loading CSS and JS files
function loadingFiles() {
  wp_enqueue_style('nunito','//fonts.googleapis.com/css?family=Nunito');
  wp_enqueue_style('nunito','//fonts.googleapis.com/css?family=Acme');
  wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.css'));
  wp_enqueue_style('themify-icons', get_theme_file_uri('/css/themify-icons.css'));
  wp_enqueue_style('fontawesome', get_theme_file_uri('/css/fontawesome-all.min.css'));
  wp_enqueue_style('owl-carousel', get_theme_file_uri('/css/owl.carousel.min.css'));
  wp_enqueue_style('slick', get_theme_file_uri('/css/slick.css'));
  wp_enqueue_style('manific-popup', get_theme_file_uri('/css/magnific-popup.css'));
  wp_enqueue_style('custom-css', get_theme_file_uri('/css/style.css"'));

}

add_action('wp_enqueue_scripts', 'loadingFiles');