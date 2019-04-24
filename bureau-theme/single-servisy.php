<?php
	get_header();
?>
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
                                <?php get_sidebar();?>
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
<?php
	get_footer();
?>