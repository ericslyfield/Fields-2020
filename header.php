<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
  
  <meta charset="utf-8">
  <link rel="stylesheet" href="sass/_font-library.scss">

  <title><?php get_the_title(); ?></title>

    <?php wp_head();?>

</head>

  <header>
    
      <div id="header-wrapper">

        <article id="site-title">
          <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </article>
        
        <article id="navigation">
        <?php wp_nav_menu(

        array(
          'theme_location' => 'header-menu',
          'menu_class' => 'navigation',
          )
        );?>
        </article>
      </div>
  </header>



