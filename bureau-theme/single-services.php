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
                    <div class="col-md-4">
                        <div class="wrapper-logo full-width">
                            <div class="logo"></div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="wrapper-menu">
                            <ul>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>en/">Home</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us-en/">About us</a></li>
                                <li><a href="<?php $category_id = get_cat_ID( 'News' ); echo get_category_link( $category_id ); ?>">News</a></li>
                                <li><a href="#" class="services-link">Services</a></li>
                                <li><a href="#" class="connection-link">Communication</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-1">
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
                    <div class="col-md-4">
                        <div class="wrapper-logo full-width">
                            <div class="logo"></div>
                        </div>
                    </div>
                    <div class="col-md-7">
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
                    <div class="col-md-1">
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
	<main>
		<?php 
            while ( have_posts() ) : the_post(); 
        ?>
                <div class="wrap-mninfo">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                
                            </div>
                            <div class="col-md-9">
                                <div class="bl-name-services">
                                    <h1><?php the_title();?></h1>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <aside class="left-sidebar">
                                     <?php if ( !dynamic_sidebar('left-sidebar') ) : ?>
                                     <?php endif; ?>
                                        <ul class="services">
                                            <li><h1>Services</h1>
                                                <ul class="sub-menu">
                                                    <?php
                                                    $args = array(
                                                        'post_type' => 'services',
                                                        'publish' => true,
                                                        'cat' => get_cat_ID("Services")
                                                    );
                                                    query_posts( $args );
                                                    while (have_posts()) : the_post(); ?>
                                                        <li>
                                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </li>
                                                    <?php endwhile; ?>
                                                    <?php wp_reset_query();?>
                                                </ul>
                                            </li>
                                        </ul>
                                </aside>
                            </div>
                            <div class="col-md-9">
                                <div class="my-content">
                                    <?php the_content();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php 
            endwhile; 
        ?> 
	</main>
    <footer>
        <div class="main-contact-form full-width">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wrapper-main-contact full-width">
                            <div class="cont-contact">
                                <h1>Connect with us</h1>
                                <span class="time-work">Round the clock from 8:00 to 18:00</span>
                                <h3>Address</h3>
                                <div class="address-info">
                                    <span>Gryaznova 4a</span>
                                    <span>Zaporozhye, Ukraine, 69000</span>
                                    <span>(+888) 88-88-888</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="wrapper-main-form full-width">
                            <div class="cont-form">
                                <form method="post" id="mainpage-form">
                                        <input type="text" name="telephone" id="mob-user" placeholder="PHONE" required>
                                        <input type="text" name="firstname" id="name-user" placeholder="NAME" required>
                                        <input type="text" name="lastname" id="lastname-user" placeholder="SURNAME" required>
                                        <textarea name="message-user" id="message-user" placeholder="MESSAGE" required></textarea>
                                        <input type="submit"  class="submit" onclick="validate('error')" value="Contact">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-footer full-width">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="wrapper-pr full-width">
                            <h1>2017 - all rights reserved</h1>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wrapper-dev full-width">
                            <h3>Developed by : Aleksandr Melent'yev</h3>
                            <span>Vitaliy Belyy</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wrapper-design full-width">
                            <h3>Site design : Arkhipov Sergey</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id='scroll'>
            <span><i class="fa fa-angle-up" aria-hidden="true"></i></span>
        </div>
        <?php 
            wp_footer();
        ?>
    </footer>
</body>
</html>