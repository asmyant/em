<?php
/**
 * Template name: Главная страница
 */

get_header();


$sections = array('about', 'catalog', 'cooperation', 'service', 'news');

foreach ($sections as $section) {
   get_template_part('template-parts/front-page/' . $section, $section);
}

get_footer();


