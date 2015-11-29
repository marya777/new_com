<?php
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           

http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--

<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>" /> 
<!-- Отобразит кодировку, которую использует Ваш блог -->
<meta name="viewport" content="width=device-width">
<!-- width=device-width - отображение по ширине устройства -->
<meta name="MobileOptimized" content="320"/>
<meta name="HandheldFriendly" content="true"/>
<!-- отображение на старых мобильных экранах -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<!-- что бы старый ие все нормально отображал -->
<title><?php bloginfo('name'); ?><?php wp_title('&#124;',true); ?></title>
<!-- заголовок блога bloginfo('name'), &#124 слэш, wp_title(true) название страницы-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php get_template_directory_uri();?>/js/html5shiv.js"></script>
      <script src="<?php get_template_directory_uri();?>/js/respond.min.js"></script>
    <![endif]-->

<?php wp_head(); ?> 
<!-- заканчиваем хед -->

</head>
<body <?php body_class(); ?>>
  <!-- дописывает к тегу body различные классы -->
             

<header>
   <!-- описывам область с основними заголовками -->
<!-- напигация  -->
<nav role="navigation">
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container">
           <!-- коллапс навигаци для маленьких экранов -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			
<!-- коллапс навигаци для маленьких экранов закончился -->

           <div><a class="divSiteTitle" href="<?php bloginfo( 'url' ) ?>/" 
			title="<?php bloginfo( 'name' ) ?>" rel="homepage"><b><?php bloginfo( 'name' ) ?></b></a>
			</div>
			<div>
            <a class="divTagLine"><?php bloginfo('description'); ?></a>
       </div>
<!-- вывести заголовок блога bloginfo-->
        </div>
<!-- подгребает из фунцций возможность использования бутстрап выпадающих меню-->
          <div class="navbar-collapse collapse navbar-responsive-collapse">
         <?php

                $args = array(
                    'theme_location' => 'top-bar',
                    'depth'      => 2,
                    'container'  => false,
                    'menu_class'     => 'nav navbar-nav navbar-right',
                    'walker'     => new Bootstrap_Walker_Nav_Menu()
                );

                wp_nav_menu($args);

            ?>

          </div>
        </div>
     </div>           
</nav>
  <!-- навигация закончилась -->         
 
    </header><!-- end of header -->


    
        <div id="wrapper" class="clearfix">   <!-- помагает центрировать контент-->  
    
