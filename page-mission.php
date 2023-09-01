<?php get_header() ?>

<div class="section is-brand-bg is-sm">
   <div class="container">
      <?php get_template_part('template-parts/breadcrumb'); ?>

      <div class="section__head is-border">
         <h1 class="h2"><?= get_the_title(); ?></h1>
      </div>

      <div class="row">
         <div class="col-lg-5 post-section__picture">
            <?= get_the_post_thumbnail(); ?>
         </div>

         <div class="col-lg-7 post-section__wrapper is-between">
            <div class="text-lg color-black post-section__content">
               <?= get_the_content(); ?>

               <div class="row d-lg-none">
                  <div class="col-6">
                     <a href="<?= get_post_type_archive_link('catalog'); ?>" class="button button-green button-block">В каталог</a>
                  </div>
                  <div class="col-6">
                     <a href="#feedback" rel="modal:open" class="button  button-block">Свяжитесь с нами</a>
                  </div>
               </div>
            </div>

            <div class="d-lg-block d-none">
               <div class="post-section__buttons">
                  <a href="<?= get_post_type_archive_link('catalog'); ?>" class="button button-green">В каталог</a>
                  <a href="#feedback" rel="modal:open" class="button button-blue">Свяжитесь с нами</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php get_template_part('template-parts/front-page/cooperation'); ?>

<?php get_footer() ?>
