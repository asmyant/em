<?php
get_header();

$image_id = get_image_post_type(false, false);
?>

   <div class="section is-brand-bg is-sm">
      <div class="container">
         <?php get_template_part('template-parts/breadcrumb') ?>

         <div class="section__head is-border">
            <div class="section__head-row row">
               <div class="col-6">
                  <h1 class="h2"><?= get_the_title(); ?></h1>
               </div>
               <div class="col-6 text-lg-right">
                  <a href="<?= get_post_type_archive_link('catalog') ?>" class="button-green button">В каталог</a>
               </div>
            </div>
         </div>

         <div class="row justify-content-between row-y-20">
            <div class="col-md-6">
               <div class="text service-text">
                  <?= get_the_content(); ?>
               </div>
               <div class="mt-3">
                  <a href="#feedback" data-title="Свяжитесь с нами" rel="modal:open" class="button button-green">
                     Свяжитесь с нами
                  </a>
               </div>
            </div>

            <div class="col-md-6">
               <?=  wp_get_attachment_image($image_id, 'post-thumbnail', '', array(
                  'class' => 'img-round-right img-block',
               )) ?>
            </div>
         </div>
      </div>
   </div>


<?php get_footer(); ?>