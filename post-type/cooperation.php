<?php

/**
 * Подключение тип записей Сотрудничество
 */
function cooperation_post_type_register()
{
   register_post_type('cooperation', [
      'label' => 'Сотрудничество',
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
      'supports' => array('title', 'editor', 'excerpt'),
      'taxonomies' => array(),
      'has_archive' => true,
   ]);
}


add_action('init', 'cooperation_post_type_register');
