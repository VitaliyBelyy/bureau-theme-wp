<aside class="left-sidebar">
 <?php if ( !dynamic_sidebar('left-sidebar') ) : ?>
 <?php endif; ?>
	<ul class="services">
		<li><h1>Сервисы</h1>
			<ul class="sub-menu">
				<?php
				$args = array(
	                'post_type' => 'servisy',
	                'publish' => true,
	                'cat' => get_cat_ID("сервисы")
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