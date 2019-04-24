
<?php get_header();?>
        <main class="cont-category">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="category-heading">
                            <h1><?php single_cat_title(); ?></h1>
                            <?php echo category_description(); ?>
                        </div>
                    </div>
                    <div class="news-cat-wrap full-width">
                        <?php
                        if ( have_posts() ) : 
                            while ( have_posts() ) : the_post(); 
                            ?>  
                                <div class="col-md-4 col-sm-6">
                                    <div class="wrap-post">
                                        <div class="miniature full-width">
                                            <?php the_post_thumbnail('' , array('class' => 'miniature') ); ?>
                                        </div>
                                        <div class="post-preview">
                                            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                            <?php the_excerpt(); ?>
                                            <a href="<?php the_permalink(); ?>"><?php pll_e( "Читать далее..." ) ?></a>
                                        </div>
                                        <div class="date">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <span><?php echo get_the_date('d.m.y'); ?></span>
                                            <span><?php the_time('G:i'); ?></span>
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
                    <div class="col-md-12">
                        <div class="pagenavi">
                            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php get_footer(); ?>