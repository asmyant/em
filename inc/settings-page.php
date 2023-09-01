<?php

/**
 * Страница настроек
 * Плагин custom fields pro
 */
if (function_exists('acf_add_options_page')) {
   acf_add_options_page(array(
      'page_title' => 'Настройки Emarat',
      'menu_title' => 'Настройки Emarat',
      'menu_slug' => 'theme-general',
      'capability' => 'edit_posts',
      'redirect' => false,
      'position' => '29'
   ));

   acf_add_options_sub_page(array(
      'page_title' => 'Фоны для архивов',
      'menu_title' => 'Фоны для архивов',
      'slug' => 'theme-pages-bg',
      'parent_slug' => 'theme-general',
   ));
}

