<?php

// Enqueue Custom Styles and Vendor Scripts
function xello_enqueue_script()
{
  wp_enqueue_style('xello-styles', get_stylesheet_directory_uri() . '/style.css', false);
	wp_enqueue_script('xello-js', get_stylesheet_directory_uri() . '/assets/dist/js/main.js', null, '', true);
}

add_action('wp_enqueue_scripts', 'xello_enqueue_script');