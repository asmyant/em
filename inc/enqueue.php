<?php

/**
 * Подключение стилей и скриптов
 */

/**
 * Стили
 */
function enqueue_styles()
{
   /**
    * Delete wp custom styles
    */
   wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), _S_VERSION);

   // Disabled gutenberg
   wp_dequeue_style( 'wp-block-library' );
   wp_dequeue_style( 'wp-block-library-theme' );
   wp_dequeue_style( 'global-styles' );
   wp_dequeue_style( 'global-styles' );
   wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS

   wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), _S_VERSION);
   wp_enqueue_style('modal', get_template_directory_uri() . '/assets/css/modal.css', array(), _S_VERSION);
   wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/fancybox.css', array(), _S_VERSION);
   wp_enqueue_style('select', get_template_directory_uri() . '/assets/css/select.css', array(), _S_VERSION);
   wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), _S_VERSION);
   wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION);
}

/**
 * Скрипты
 */
function enqueue_scripts()
{
   global $wp_query;

   if (!is_admin()) {
      wp_deregister_script('jquery');
      wp_register_script('jquery', false);
   }

   wp_enqueue_script('google-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js', array(), _S_VERSION, true);
   wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js', array('main'), _S_VERSION, true);
   wp_enqueue_script('modal', get_template_directory_uri() . '/assets/js/modal.js', array('main'), _S_VERSION, true);
   wp_enqueue_script('select', get_template_directory_uri() . '/assets/js/select.js', array('main'), _S_VERSION, true);
   wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/fancybox.js', array('main'), _S_VERSION, true);
   wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('google-jquery',), _S_VERSION, true);

   wp_localize_script('main', 'post_ajax_data', array(
      'ajaxurl' => admin_url('admin-ajax.php'),
      'max_page' => $wp_query->max_num_pages,
   ));
}

/**
 * Отключение стандартных стилей и скриптов
 */
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');

add_action('wp_enqueue_scripts', 'enqueue_styles');
add_action('wp_enqueue_scripts', 'enqueue_scripts');