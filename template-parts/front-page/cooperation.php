<?php
$posts = new WP_Query(array(
   'post_type' => 'cooperation',
   'posts_per_page' => -1,
));

?>

<?php if ($posts->have_posts()) : ?>
   <section class="section is-blue is-sm">
      <div class="container">
         <div class="section__head color-white">
            <h2 class="h2">Сотрудничество</h2>
         </div>

         <div class="row post-grid__row">
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>
               <div class="col-md-6">
                  <?= get_template_part('template-parts/items/post-grid', get_post_format()) ?>
               </div>
            <?php endwhile;  wp_reset_postdata(); ?>
         </div>
      </div>
   </section>
<?php endif; ?>
