<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Site description">

  <title><?php wp_title( 'UpTrending - ', true, 'left' ); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link href="<?php bloginfo('template_url'); ?>/dist/img/favicon.ico" rel="icon" type="image/x-icon">
  <link href="<?php bloginfo('template_url'); ?>/dist/<?php AssetLink::manifest_url('application.css'); ?>" rel="stylesheet">
  <script src="<?php bloginfo('template_url'); ?>/dist/<?php AssetLink::manifest_url('application-min.js'); ?>"></script>

  <!-- TypeKit Fonts -->
  <script src="https://use.typekit.net/oqd1jyk.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <base href="/">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="siteWrapper">
    <div class="siteBody">
      <div class="nav">
        <div class="container">
          <div class="navContainer">
            <div class="nav-left">
              <div class="navLogo">
                <a href="/"><img src="<?php the_field('nav_logo', 'option'); ?>" alt="Uptrending Logo" /></a>
              </div>
            </div>

            <div class="nav-right">
              <?php wp_nav_menu( array( 'theme_location' => 'primary-nav', 'menu_class' => 'primaryNav' ) ); ?>
            </div>
          </div>
        </div>
      </div>
