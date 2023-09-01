<?php
/**
 * Последние новости
 * Секция для главной страницы
 */

$news = new WP_Query(array(
   'post_type' => 'post',
   'posts_per_page' => 8,
))
?>

<?php if ($news->have_posts()) : ?>
   <section class="section is-sm is-white">
      <div class="container">
         <div class="section__head is-border color-black">
            <h2 class="h2">Последние новости</h2>
         </div>

         <div class="js-news-slider news-slider">
            <?php while ($news->have_posts()) : $news->the_post(); ?>
               <div class="item">
                  <?php get_template_part('template-parts/items/news', 'post'); ?>
               </div>
            <?php endwhile; wp_reset_postdata(); ?>
         </div>
      </div>
   </section>
<?php endif; ?>