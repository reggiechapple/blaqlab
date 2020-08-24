<?php

function BlaqLab_enqueue() {

    // css libraries
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/lib/fontawesome/css/fontawesome.min.css');
    wp_enqueue_style('site-colors', get_template_directory_uri() . '/css/colors.css');

    // main stylesheet
    if($_SERVER['SERVER_NAME'] != 'localhost'){
        wp_enqueue_style('style', get_template_directory_uri() . '/style.min.css');
    } else{
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }

    // js files
    wp_enqueue_script( 'popperjs', get_template_directory_uri() . '/lib/popper/popper.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'scriptjs', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );

}

add_action('wp_enqueue_scripts', 'BlaqLab_enqueue');

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
register_nav_menus( array(
    'header' => 'Custom Primary Menu',
  ) );

function BlaqLab_widgets_init() {

  register_sidebar( array(
    'name'          => 'Footer 1',
    'id'            => 'footer_1',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer 2',
    'id'            => 'footer_2',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer 3',
    'id'            => 'footer_3',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => 'sidebar',
    'id'            => 'sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="ttl">',
    'after_title'   => '</h4>',
  ) );

}
add_action( 'widgets_init', 'BlaqLab_widgets_init' );

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

?>