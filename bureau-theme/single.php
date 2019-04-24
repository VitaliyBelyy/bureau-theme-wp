<?php
	get_header();
?>
<main>
	<section class="cont-single">
		<?php 
            while ( have_posts() ) : the_post(); 
        ?>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h1><?php the_title();?></h1>
							</div>
						</div>
						<div class="col-md-12">
							<?php 
							if( has_post_thumbnail() ) {
							?>
								<div class="post-thumbnail">
									<?php the_post_thumbnail('' , array('class' => 'miniature') ); ?>
								</div>
							<?php
							}
							?>
							<?php the_content();?>
							<div class="post-date">
								<span><?php echo get_the_date('d-m-Y');?></span>
							</div>
						</div>
						<div class="col-md-12 col-xs-12 col-sm-12">
                            <?php 
                                the_post_navigation( array(
                                    'prev_text' =>   '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">'.'<i class="fa fa-arrow-left" aria-hidden="true"></i>'.'</span><span class="content-title">%title</span></span>',
                                    'next_text' =>   '</span> <span class="nav-title"><span class="content-title">%title</span><span class="nav-title-icon-wrapper">'.'<i class="fa fa-arrow-right" aria-hidden="true"></i>'.'</span></span>',
                                ) );
                            ?>
                    	</div>
					</div>
				</div>
        <?php 
            endwhile; 
        ?>  
	</section>
</main>
<?php
	get_footer();
?>