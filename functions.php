<?php
function dopefolio_assets() {

  // Main Dopefolio CSS (ROOT)
  wp_enqueue_style(
    'dopefolio-style',
    get_stylesheet_uri(), 
    [],
    null
  );

  // Main JS
  wp_enqueue_script(
    'dopefolio-js',
    get_template_directory_uri() . '/index.js',
    [],
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'dopefolio_assets');

// Theme basics
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// Menu
register_nav_menus([
  'main-menu' => 'Main Menu'
]);

// Hero socials widget area (left side)
function dopefolio_hero_socials_widget() {
  register_sidebar([
    'name' => 'Hero Socials',
    'id' => 'hero-socials',
    'description' => 'Social icons on the left side of the hero section',
    'before_widget' => '<div class="home-hero__social">',
    'after_widget'  => '</div>',
    'before_title'  => '',
    'after_title'   => '',
  ]);
}
add_action('widgets_init', 'dopefolio_hero_socials_widget');

// Footer socials widget area
function dopefolio_footer_socials() {
  register_sidebar([
    'name' => 'Footer Socials',
    'id' => 'footer-socials',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ]);
}
add_action('widgets_init', 'dopefolio_footer_socials');


