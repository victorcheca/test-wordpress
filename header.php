<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml"> 
<head profile="http://gmpg.org/xfn/11"> 
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" /> 
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title> 
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"/> 
    <!-- Auto wp_head -->
    <?php wp_head(); ?>
    <!-- Auto wp_head -->
</head> 
<body <?php body_class() ?>> 
 
    <header class="header">
        <div class="header__logo">
            <h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1> 
            <div class="description"><?php bloginfo('description'); ?></div> 
        </div>
        
        
        <div class="header__nav">
            <?php wp_nav_menu(array(
                'menu'=>'primary',
                'menu_class'=>'nav__item',
            ));?>
        </div>
        
        
    </header>


    
