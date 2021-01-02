<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
  
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


  <title><?php get_the_title(); ?></title>
    <?php wp_head();?>

</head>

  <header>
    
      <div id="header-wrapper">

        <article id="site-title">
          <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </article>
        
        <nav id="navigation">
          <ul>
            <li>
            <?php wp_nav_menu(

            array(
              'theme_location' => 'header-menu',
              'menu_class' => 'navigation',
              )
            );?>
            </li>
          </ul>
        </nav>
      </div>
      
  </header>



