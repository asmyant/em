<?php

/**
 * Загрузка новостей при клике через ajax
 */
function news_load_more()
{
   $posts = new WP_Query(array(
      'post_type' => $_POST['type'],
      'paged' => $_POST['page'] + 1,
   ));

   if ($posts->have_posts()) {
      while ($posts->have_posts()) {
         $posts->the_post();
         echo '<div class="col">';
         get_template_part('template-parts/items/news', get_post_format());
         echo '</div>';
      }
   }
   die;
}


add_action('wp_ajax_news_load_more', 'news_load_more');
add_action('wp_ajax_nopriv_news_load_more', 'news_load_more');