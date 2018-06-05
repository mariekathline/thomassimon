<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo( 'name' ) ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <meta name="description" content="<?php bloginfo( 'description' ) ?>">
    <link href="//fonts.googleapis.com/css?family=Roboto|IBM+Plex+Mono|Ubuntu+Mono" rel="stylesheet">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, user-scalable=no">
  </head>

  <body>

    <div id="pageLoader">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
    </div>

          <nav id="navMenu">
              <h2 class="icon icon-lab">Thomas Simon</h2>
              <?php wp_nav_menu(array(
          	     'theme_location' => 'mainmenu',
               )); ?>
               <a id="closeButton" href="#">Fermer</a>
          </nav>
          <div id="divCloseMenu"></div>

          <div id="bigContainer">

              <button id="burgermenu"><span></span></button>
