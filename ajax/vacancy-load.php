<?php

/**
 * Загрузка вакансий при клике через ajax
 */
function vacancy_load_more()
{
   $posts = new WP_Query(array(
      'post_type' => $_POST['type'],
      'paged' => $_POST['page'] + 1,
   ));

   if ($posts->have_posts()) {
      while ($posts->have_posts()) {
         $posts->the_post();
         echo '<div class="col">';
         get_template_part('template-parts/items/vacancy', get_post_type());
         echo '</div>';
      }
   }
   die;
}


add_action('wp_ajax_vacancy_load_more', 'vacancy_load_more');
add_action('wp_ajax_nopriv_vacancy_load_more', 'vacancy_load_more');