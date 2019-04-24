<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Бюро оценки</title>
    <?php
        wp_head(); 
    ?>
</head>
<body class='<?php echo ( is_home() || is_front_page() ) ? ' mainpage' : 'secondary' ?>'>
    <header class="cd-background-wrapper">
        <div class="header-menu full-width">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="wrapper-logo full-width">
                            <div class="logo"></div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-7">
                        <div class="wrapper-menu">
                            <ul>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us-en/">About us</a></li>
                                <li><a href="<?php $category_id = get_cat_ID( 'News' ); echo get_category_link( $category_id ); ?>">News</a></li>
                                <li><a href="#" class="services-link">Services</a></li>
                                <li><a href="#" class="connection-link">Communication</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-1">
                        <div class="wrapper-language">
                            <?php 
                                if ( function_exists( 'wp_nav_menu' ) )
                                    wp_nav_menu( 
                                        array( 
                                        'theme_location' => 'top',
                                        'fallback_cb'=> 'custom_menu',
                                        'container' => 'ul',
                                        'menu_class' => 'nav') 
                                    );
                                else custom_menu();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-fixed-menu full-width">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="wrapper-logo full-width">
                            <div class="logo"></div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-7">
                        <div class="wrapper-menu">
                            <ul>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us-en/">About us</a></li>
                                <li><a href="<?php $category_id = get_cat_ID( 'News' ); echo get_category_link( $category_id ); ?>">News</a></li>
                                <li><a href="#" class="services-link">Services</a></li>
                                <li><a href="#" class="connection-link">Communication</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-1">
                        <div class="wrapper-language">
                            <?php 
                                if ( function_exists( 'wp_nav_menu' ) )
                                    wp_nav_menu( 
                                        array( 
                                        'theme_location' => 'top',
                                        'fallback_cb'=> 'custom_menu',
                                        'container' => 'ul',
                                        'menu_class' => 'nav') 
                                    );
                                else custom_menu();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>