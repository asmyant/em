<?php get_header(); ?>

   <div class="section is-brand-bg is-sm">
      <div class="container">
         <?= get_template_part('template-parts/breadcrumb') ?>

         <div class="section__head is-border">
            <h1 class="h2"><?= get_the_title() ?></h1>
         </div>

         <div class="text text-lg">
            <?= get_the_content(); ?>
         </div>
      </div>
   </div>

<?php get_footer(); ?>