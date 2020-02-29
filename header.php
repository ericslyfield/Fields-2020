<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <title>Eric Slyfield 2020</title>

    <?php wp_head();?>


</head>

  <header>
    
      <div class="header-container">

        <section id="site-title">
          <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </section>
        
        <section id="global-nav">
        <?php wp_nav_menu(

        array(
          'theme_location' => 'header-menu',
          'menu_class' => 'navigation',
          )
        );?>
        </section>
      </div>
  </header>



