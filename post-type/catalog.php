<?php

/**
 * Подключение тип записей Каталог
 */
function catalog_post_type_register()
{
   register_post_type('catalog', [
      'label' => 'Каталог',
      'description' => '',
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_rest' => true,
      'rest_base' => '',
      'show_in_menu' => true,
      'exclude_from_search' => false,
      'menu_icon' => 'dashicons-calendar-alt',
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'taxonomies' => array('catalog-category'),
      'has_archive' => true,
   ]);
}

function catalog_category_register_tax()
{
   register_taxonomy('catalog-category', array('catalog'), [
      'label' => 'Категории',
      'public' => true,
      'hierarchical' => true,
      'capabilities' => array(),
      'meta_box_cb' => null,
      'show_admin_column' => false,
      'show_in_rest' => true,
      'rest_base' => null,
   ]);
}


add_action('init', 'catalog_post_type_register');
add_action('init', 'catalog_category_register_tax');
