<?php 


function add_theme_scripts() {
  $current_url=$_SERVER['REQUEST_URI'];


  wp_enqueue_style( 'css-bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css', array(),  'all');
  wp_enqueue_style( 'css-owlCarousel', get_template_directory_uri() . '/static/owl carousel/css/owl.carousel.min.css', array(), 'all');
  wp_enqueue_style( 'css-fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(),  'all');
  wp_enqueue_style( 'css-base', get_template_directory_uri() . '/static/css/base.css', array(),  'all');


  is_home() && wp_enqueue_style( 'css-index', get_template_directory_uri() . '/static/css/index.css', array(),  'all');
  is_page('about-us') && wp_enqueue_style( 'css-about', get_template_directory_uri() . '/static/css/about-us.css', array(),  'all');
  is_page('contact-us') &&  wp_enqueue_style( 'css-contact', get_template_directory_uri() . '/static/css/contact.css', array(),  'all');
  is_page('insights') &&  wp_enqueue_style( 'css-insight', get_template_directory_uri() . '/static/css/insights.css', array(),  'all');
  is_page('project') &&  wp_enqueue_style( 'css-project', get_template_directory_uri() . '/static/css/projects.css', array(),  'all');
  if (is_page(array('executive-search','senior-mid-hiring', 'mass-hiring', 'payroll-management', 'contact-hire','asia-pacific-hiring'))){
    wp_enqueue_style( 'css-serviceDetails', get_template_directory_uri() . '/static/css/service-details.css', array(),  'all');
  }
  


  wp_enqueue_script('jquery');

  wp_enqueue_script( 'js-jQuery', '//code.jquery.com/jquery-3.5.1.min.js', array ('jquery'), 1.1, true);
  wp_enqueue_script( 'js-bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js', array('jquery'), 1.1,  true);
  wp_enqueue_script( 'js-owlCarousel', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), 1.1,  true);



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>