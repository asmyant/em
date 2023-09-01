<?php get_header(); ?>

<div class="section is-brand-bg is-sm">
   <div class="container">
      <?= get_template_part('template-parts/breadcrumb') ?>

      <div class="section__head is-border">
         <h1 class="h2">Результаты поиска</h1>
      </div>

      <?php if (have_posts()) : ?>
         <div>
            <?php while (have_posts()): the_post(); ?>
               <?php get_template_part('template-parts/items/search', get_post_format()) ?>
            <?php endwhile; ?>
         </div>
      <?php else : ?>
         <div class="h4">По запросу <b><?= get_search_query() ?></b> ничего не найдено!</div>
      <?php endif; ?>
   </div>
</div>

<?php get_footer(); ?>
