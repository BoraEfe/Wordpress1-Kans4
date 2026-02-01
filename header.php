<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
  <div class="header__content">

    <span class="header__logo-sub">
        <?php bloginfo('name'); ?>
    </span>


    <!-- Desktop menu -->
    <nav class="header__menu">
      <?php
        wp_nav_menu([
          'theme_location' => 'main-menu',
          'container' => false,
          'menu_class' => 'header__links',
          'fallback_cb' => false
        ]);
      ?>
    </nav>

    <!-- Hamburger -->
    <div class="header__main-ham-menu-cont">
      <img
        src="<?php echo get_template_directory_uri(); ?>/images/ham-menu.svg"
        alt="hamburger menu"
        class="header__main-ham-menu"
      />
      <img
        src="<?php echo get_template_directory_uri(); ?>/images/ham-menu-close.svg"
        alt="hamburger menu close"
        class="header__main-ham-menu-close d-none"
      />
    </div>

  </div>

  <!-- Mobile menu -->
  <div class="header__sm-menu">
    <div class="header__sm-menu-content">
      <?php
        wp_nav_menu([
          'theme_location' => 'main-menu',
          'container' => false,
          'menu_class' => 'header__sm-menu-links',
          'fallback_cb' => false
        ]);
      ?>
    </div>
  </div>
</header>
