<?php get_header(); ?>

   <div class="section is-brand-bg is-sm">
      <div class="container">
         <?php get_template_part('template-parts/breadcrumb') ?>

         <div class="section__head is-border">
            <h1 class="h2">Сервисы</h1>
         </div>

         <?php if (have_posts()) : ?>
            <div>
               <?php while (have_posts()): the_post();
                  get_template_part('template-parts/items/post-inline', get_post_format());
               endwhile;
               wp_reset_postdata(); ?>
            </div>
         <?php endif; ?>
      </div>
   </div>

<?php get_footer(); ?>