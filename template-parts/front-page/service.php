<?php $posts = new WP_Query(array(
   'post_type' => 'service',
)) ?>

<?php if ($posts->have_posts()) : ?>
   <section class="section is-brand-bg">
      <div class="container">
         <div class="section__head is-border">
            <h2 class="h2">Сервисы</h2>
         </div>

         <div>
            <?php while ($posts->have_posts()): $posts->the_post();
               get_template_part('template-parts/items/post-inline', get_post_format());
            endwhile;
            wp_reset_postdata(); ?>
         </div>
      </div>
   </section>
<?php endif; ?>