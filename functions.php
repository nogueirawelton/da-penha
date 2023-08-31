<?php

function load_static() {
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');
  wp_enqueue_script('sweetalert-js', 'https://cdn.jsdelivr.net/npm/sweetalert2@11');
  
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
  wp_enqueue_style('index-css', get_template_directory_uri() . '/dist/css/styles.css');
}

add_action('wp_enqueue_scripts', 'load_static');