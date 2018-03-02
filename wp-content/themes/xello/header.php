<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

    <title>Xello.world</title>
    <?php wp_head(); ?>
  </head>
  <body>

    <div class="container">

      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        
        <a class="mr-auto navbar-brand" href="/">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xello-logo-white.svg" alt="Xello" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile" aria-controls="navbar-mobile" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-mobile">
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
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">FR</a>
            </li>
          </ul>
        </div>

      </nav>

      <header>
        <?php if (is_front_page()) { ?>
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <div class="row">
                <div class="header-image col-sm-6">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="col-sm-6">
                  <p><?php the_field('header_section_title'); ?></p>
                  <h1><?php the_field('header_title'); ?></h1>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </header>

      <main>