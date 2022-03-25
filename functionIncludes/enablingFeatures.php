<?php

// Add feature image support.

function addfeaturedImageSupport() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'addfeaturedImageSupport');