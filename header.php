<?php
/*
Created by : Beatrice Bjorn
For : Projekt - CMS - webbdesign för CMS, DT197G
Last updated : 2022-07-11
*/
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@200;300;400&display=swap" rel="stylesheet">
    <!-- Gets the right path for wordpress to the CSS-file -->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/main.css">
    <!-- Tells wordpress that this is the head of the website -->
    <?php wp_head(); ?>
    <!-- sets the title of the website to the wordpress title for the theme -->
    <title><?php bloginfo('name'); ?></title>
</head>

<body>
    <header>
        <nav>
            <!-- Wordpress function to add the main menu to the website  -->
            <?php wp_nav_menu(array('theme_location' => 'main-nav')); ?>
            <!-- Gets the link to the front page of the website and adds the right path to the logotype image -->
            <a href="<?= get_home_url(); ?>"><img class="logo" width="130" height="90" alt="logotype" src="<?= get_template_directory_uri(); ?>/images/logo.svg"></a>

            <button class="hamburger">
                 <!-- adds the right path to the menu icons -->
                <img class="openMenu" width="40" height="30" alt="button to open manu" src="<?= get_template_directory_uri(); ?>/images/menu_black.svg">
                <img class="closeMenu" width="40" height="30" alt="button to close menu"
                    src="<?= get_template_directory_uri(); ?>/images/close_menu_black.svg">
            </button>
        </nav>
    </header>
    <main>