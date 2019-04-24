<?php
/*
Template Name: homeEn
*/
?>

<?php
    get_header();
?>
    <main>
        <div class="mainpage-info full-width">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wrapper-hinfo">
                            <h1>We are №1</h1>
                            <span>«Bureau Of Evaluation»</span>
                            <ul>
                                <li>- We work all over Ukraine</li>
                                <li>- We take care of our customers 24 hours a day</li>
                                <li>- Effective resolution of issues</li>
                                <li>- We are trusted by leading Ukrainian companies</li>
                            </ul>
                            <a href="#" class="btn-headerinf">Get advice</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="parallax-outer">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vector1.png" alt="image-1">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vector2.png" alt="image-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-about-us full-width">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrapper-about full-width clearfix">
                            <div class="cont-text">
                                <h1>About us</h1>
                                <span>We are the best company in the field of property valuation.</span>
                                <div class="my-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute i ure dolor in reprehenderit in voluptate velit esse cillum dolore
                                        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us-en/">Learn More</a>
                            </div>
                            <div class="cont-image" id='elem'>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-services">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="services-heading">
                            <h2><span>Our</span> services</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-slider full-width">
                <div class="owl-carousel">
                    <?php
                            $args = array(
                               'post_type' => 'services',
                               'publish' => true,
                               // 'paged' => get_query_var('paged'),
                            );
                        
                        query_posts($args); 
                        if ( have_posts() ) : 
                            while ( have_posts() ) : the_post(); 
                    ?>
                            <div class="service-slide">
                                <div class="prevSlide"></div>
                                <div class="nextSlide"></div>
                                <div class="service-miniature full-width">
                                    <?php the_post_thumbnail('' , array('class' => 'miniature') ); ?>
                                </div>
                                <div class="service-preview full-width">
                                    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>  
                    <?php 
                            endwhile;
                        else : 
                        endif; 
                        wp_reset_query(); 
                    ?>
                </div>
            </div>
        </div>
        <div class="main-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="news-heading">
                            <h2><span>Latest</span> news</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-posts-cont full-width">
                <?php
                if ( have_posts() ) : 
                    query_posts('showposts=3');
                    while ( have_posts() ) : the_post(); 
                    ?>
                        <div class="wrap-post mainpage">
                            <div class="miniature full-width">
                                    <?php the_post_thumbnail('' , array('class' => 'miniature') ); ?>
                            </div>
                            <div class="post-preview">
                                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>">Read more...</a>
                                <div class="date">
                                    <span><?php echo get_the_date('d.m.y'); ?></span>
                                </div>
                            </div>
                        </div>
                <?php 
                    endwhile;
                else : 
                endif; 
                wp_reset_query(); 
                ?>
            </div>
            <div class="news-link-wrap">
                <a href="<?php echo get_category_link( 30 ); ?>">View All</a>
            </div> 
        </div>
        <div class="city-selection full-width">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrapper-selected full-width">
                            <div class="name-bl">
                                <h1>Select </h1>
                                <span>city</span>
                            </div>
                            <div class="select-city-bl">
                                <select name="select-city" id="selected-city">
                                    <option selected></option>
                                    <option id="sl-1">Nikopol</option>
                                    <option id="sl-2">Kherson</option>
                                    <option id="sl-3">Kobelyaki</option>
                                    <option id="sl-4">Kharkiv</option>
                                    <option id="sl-5">Shostka</option>
                                    <option id="sl-6">Uzhhorod</option>
                                    <option id="sl-7">Ivano-Frankivsk</option>
                                    <option id="sl-8">Kamianets-Podilskyi</option>
                                </select>
                            </div>
                            <div class="cont-btn full-width">
                                <span class="cbutton cbutton--effect-radomir"><i class="cbutton__icon fa fa-chevron-down" aria-hidden="true"></i></span>
                            </div>
                            <div class="wrapper-toggle-city full-width" id="city-drop">
                                <span class="city"><i></i><span class="info"></span></span>
                                <span class="mob"><i class="fa fa-mobile" aria-hidden="true"></i><span class="info2"></span></span>
                                <span id="after"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
    get_footer();
?>