<?php

global $menu;

/**
 * Настройка темы
 */

function setup()
{
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'setup');

/**
 * Add size
 */
add_image_size('post-inline', 700, 300, true);
add_image_size('post-grid', 600, 400, true);

/**
 * Contacts form delete p and br tag
 */

define('WPCF7_AUTOP', false);
add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Disabled menu items
 */
function remove_menu_items() {
   global $menu;
   unset($menu[15]); // Removes 'Links'.
   unset($menu[25]); // Removes 'Comments'.
}
add_action('admin_menu', 'remove_menu_items');


/**
 * Rename default post type
 */
function revcon_change_post_label() {
   global $menu;
   global $submenu;
   $menu[5][0] = 'Новости';
   $submenu['edit.php'][5][0] = 'Новости';
   $submenu['edit.php'][10][0] = 'Добавить новость';
   $submenu['edit.php'][16][0] = 'Добавить метку';
}
function revcon_change_post_object() {
   global $wp_post_types;
   $labels = &$wp_post_types['post']->labels;
   $labels->name = 'Новости';
   $labels->singular_name = 'Новость';
   $labels->add_new = 'Добавить новость';
   $labels->add_new_item = 'Добавить новость';
   $labels->edit_item = 'Редактировать новость';
   $labels->new_item = 'Новости';
   $labels->view_item = 'Посмотреть новость';
   $labels->search_items = 'Искать новость';
   $labels->not_found = 'Не найдено';
   $labels->not_found_in_trash = 'Не найдено';
   $labels->all_items = 'Все новости';
   $labels->menu_name = 'Новости';
   $labels->name_admin_bar = 'Новости';
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );