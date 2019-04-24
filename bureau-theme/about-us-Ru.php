<?php
/*
Template Name: about-us-Ru
*/
?>
<?php
	get_header();
?>
	<main>
		<div class="info-our">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="block-map">
							<h1>Місцезнаходження</h1>
							<div class="map-bl">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1003.2809320394548!2d35.1615929489909!3d47.831107310262325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1494067359786" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="company-inf">
							<?php
							while ( have_posts() ) : the_post(); 
			                ?>
				                <?php the_content(); ?>
			                <?php 
			                endwhile; 
			                ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sertification-company">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Юридическая документация</h1>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="sertificate-wrapper">
							<div class="thumb-wrapper full-width">
								<a href="#win1" class="round-block"></a>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sertificate1.png" alt="sertificate image" class="miniature">
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque earum, accusantium beatae consequuntur velit quisquam debitis odit dolore dolorum, adipisci sed molestias.</p>
							<a href="#win1" class="view">View</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="sertificate-wrapper">
							<div class="thumb-wrapper full-width">
								<a href="#win2" class="round-block"></a>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sertificate2.png" alt="sertificate image" class="miniature">
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque earum, accusantium beatae consequuntur velit quisquam debitis odit dolore dolorum, adipisci sed molestias.</p>
							<a href="#win2" class="view">View</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="sertificate-wrapper">
							<div class="thumb-wrapper full-width">
								<a href="#win3" class="round-block"></a>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sertificate3.png" alt="sertificate image" class="miniature">
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque earum, accusantium beatae consequuntur velit quisquam debitis odit dolore dolorum, adipisci sed molestias.</p>
							<a href="#win3" class="view">View</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<a href="#x" class="overlay" id="win1"></a>
    <div class="popup">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sertificate1.png" alt="sertificate image">
    </div>
    <a class="close" title="Закрыть" href="#close"></a>
    <a href="#x" class="overlay" id="win2"></a>
    <div class="popup">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sertificate2.png" alt="sertificate image">
    </div>
    <a class="close" title="Закрыть" href="#close"></a>
    <a href="#x" class="overlay" id="win3"></a>
    <div class="popup">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sertificate3.png" alt="sertificate image">
    </div>
    <a class="close" title="Закрыть" href="#close"></a>
<?php
	get_footer();
?>