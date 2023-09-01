<?php

/**
 * Подключение тип записей Вакансии
 */
function vacancy_post_type_register()
{
   register_post_type('vacancy', [
      'label' => 'Вакансии',
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
      'supports' => array('title', 'editor'),
      'taxonomies' => array(),
      'has_archive' => true,
   ]);
}


add_action('init', 'vacancy_post_type_register');
