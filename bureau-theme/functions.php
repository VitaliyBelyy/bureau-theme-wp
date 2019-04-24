<?php
function diplom_styles() {
   wp_enqueue_style( 'core', get_template_directory_uri() . '/assets/css/core.css',array(),null);
   wp_enqueue_style( 'fonts-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css',array(),null);
   wp_enqueue_style( 'select-2', get_template_directory_uri() . '/assets/plugins/Select2/Select2.min.css',array(),null);
   wp_enqueue_style( 'owl.carousel.min-style', get_template_directory_uri() . '/assets/plugins/owl/owl.carousel.min.css',array(),null);
   wp_enqueue_style( 'owl.theme', get_template_directory_uri() . '/assets/plugins/owl/owl.theme.default.min.css',array(),null);
   wp_enqueue_style( 'media-style', get_template_directory_uri() . '/assets/css/media.css',array(),null);
   wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/assets/js/jquery/jquery.min.js',array( 'jquery' ));
   wp_enqueue_script( 'owl.carousel.min-js', get_template_directory_uri() . '/assets/plugins/owl/owl.carousel.min.js',array( 'jquery' ));
   wp_enqueue_script( 'select2.min-js', get_template_directory_uri() . '/assets/plugins/Select2/select2.full.min.js',array( 'jquery' ));
   wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js',array( 'jquery' ));

  };
   
  add_action( 'wp_enqueue_scripts', 'diplom_styles' );

  add_theme_support( 'post-thumbnails' );

  //Регистрируем меню

      register_nav_menus(array(
        'top'    => 'Верхнее меню'
      ));

  // Регистрируем сайдбар

      $args = array(
        'name'          => 'левый сайдбар',
        'id'            => 'left-sidebar',
        'description'   => '',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>'
      );
    
      register_sidebar( $args );


  pll_register_string( "Read-more", "Читать далее...", $group, $multiline );

?>