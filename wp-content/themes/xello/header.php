<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php the_field('meta_description'); ?>" />
    <meta name="keywords" content="<?php the_field('meta_keywords'); ?>" />
    <?php if (get_field('custom_page_title')) {
      $title = get_field('custom_page_title');
    } else {
      $title = get_the_title() . ' - ' . get_bloginfo('name');
    } ?>
    <title><?php echo $title; ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <div class="container">

      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="d-flex w-100">
          <a class="mr-auto navbar-brand" href="/">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xello-logo-white.svg" alt="Xello" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile" aria-controls="navbar-mobile" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse justify-content-center" id="navbar-mobile">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Link-01</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link-02</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link-03</a>
            </li>
            <li class="nav-item d-xs-block d-sm-none">
              <a class="nav-link" href="#">FR</a>
            </li>
          </ul>
        </div>
        <span class="navbar-text small mt-1 w-100 text-right d-none d-sm-block">
          <a href="#">FR</a>
        </span>
      </nav>

      <?php if (is_front_page()) { ?>
        <header>
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <div class="row">
                <div class="header-image col-sm-6">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="header-content col-sm-6 align-self-center">
                    <p class="section-title"><?php the_field('header_section_title'); ?></p>
                  <h1><?php the_field('header_title'); ?></h1>
                </div>
              </div>
            </div>
          </div>
        </header>
      <?php } ?>

      <main>