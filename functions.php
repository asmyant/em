<?php

/**
 * Версия приложения
 */
if (!defined('_S_VERSION')) {
   define('_S_VERSION', '3.0.0');
}

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/settings-page.php';
require get_template_directory() . '/inc/menu.php';
require get_template_directory() . '/inc/helpers.php';

require get_template_directory() . '/post-type/service.php';
require get_template_directory() . '/post-type/cooperation.php';
require get_template_directory() . '/post-type/catalog.php';
require get_template_directory() . '/post-type/vacancy.php';

require get_template_directory() . '/ajax/news-load.php';
require get_template_directory() . '/ajax/vacancy-load.php';