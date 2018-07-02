<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() . '/img/website-mini-logo3.png'; ?>">
    <meta name="theme-color" content="#000">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #tools{
            background: url('<?php echo get_template_directory_uri() . "/img/tools-background.png"; ?>') no-repeat fixed;
            background-size: 100%;
        }
        @media screen and (max-width: 540px) {
            #tools {
                background-size: auto 100%;
            }
        }

        #skills{
            background: url('<?php echo get_template_directory_uri() . "/img/skills-background2.png"; ?>') no-repeat local;
            background-size: 100%;
            background-position: 50% 50%
        }
        @media screen and (max-width: 900px) {
            #skills{
                background-size: auto 100%;
            }
        }
    </style>
</head>
<body>
<div id="white-top"></div>

<div id="trapezoid">
    <a href="<?php echo home_url() ?>">
        <img src="<?php echo get_template_directory_uri() . '/img/LOGO_PNG.png'; ?>" draggable="false" class="center" />
    </a>
</div>
<div id="slidebar">
    <img src="<?php echo get_template_directory_uri() . '/img/city_background6.png'; ?>" draggable="false" id="city_img">
    <img src="<?php echo get_template_directory_uri() . '/img/person.png'; ?>" draggable="false" id="person_img">
    <div id="under_city_img">
        <div id="under_city_arrow_down">
            <p>v</p>
        </div>
    </div>
</div>
<div id="hidenavbar"></div>
<div id="navbar">
    <nav class="left-nav">
        <?php
            $args = array('theme_location' => 'left');
            wp_nav_menu( $args);
        ?>
    </nav>
    <div class="logotyp">
        <a href="<?php echo home_url() ?>">
            <img src="<?php echo get_template_directory_uri() . '/img/bialynapis2.svg'; ?>" draggable="false" class="width-scalable"/>
        </a>
    </div>
    <nav class="right-nav">
        <?php
        $argss = array('theme_location' => 'right');
        wp_nav_menu( $argss);
        ?>
    </nav>
</div>