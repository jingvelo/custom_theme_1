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
  wp_enqueue_style('custom-css', get_theme_file_uri('/css/style.css'));

  wp_enqueue_script('jquery_script_js',get_theme_file_uri('/js/jquery-2.2.4.min.js'), null, 'null', true);
  wp_enqueue_script('login',get_theme_file_uri('/js/login.js'), null, 'null', true);
  wp_enqueue_script('bootstrap',get_theme_file_uri('/js/bootstrap.min.js'), null, 'null', true);
  wp_enqueue_script('easing','//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js', null, 'null', true);
  wp_enqueue_script('slick',get_theme_file_uri('/js/slick.min.js'), null, 'null', true);
  wp_enqueue_script('popup',get_theme_file_uri('/js/magnific-popup.js'), null, 'null', true);
  wp_enqueue_script('owl-carousel',get_theme_file_uri('/js/owl-carousel.min.js'), null, 'null', true);
  wp_enqueue_script('custom-js',get_theme_file_uri('/js/custom.js"'), null, 'null', true);
}

add_action('wp_enqueue_scripts', 'loadingFiles');