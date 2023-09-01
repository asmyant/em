<?php get_header(); ?>

<div class="section is-brand-bg is-sm">
   <div class="container">
      <?php get_template_part('template-parts/breadcrumb') ?>

      <div class="section__head">
         <h1 class="h2">Сотрудничество</h1>
      </div>

      <?php if (have_posts()) : ?>
         <div>
            <?php while (have_posts()) : the_post();
               get_template_part('template-parts/items/post-inline', get_post_format());
            endwhile; ?>
         </div>
      <?php endif; ?>
   </div>
</div>

<?php get_footer() ?>
