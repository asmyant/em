<?php
get_header();

$image_id = get_image_post_type(false, false);
?>

<div class="is-brand-bg">
   <div class="section is-sm">
      <div class="container">
         <?php get_template_part('template-parts/breadcrumb') ?>

         <div class="section__head is-border">
            <h1 class="h2"><?= get_the_title(); ?></h1>
         </div>

         <div class="row">
            <div class="col-lg-5 post-section__picture">
               <?= wp_get_attachment_image($image_id, 'post-grid', '', array(
                  'class' => 'img-round img-block',
               )) ?>
            </div>

            <div class="col-lg-7 post-section__wrapper is-between">

               <div class="text-lg color-black post-section__content">
                  <?= get_the_content(); ?>

                  <div class="d-lg-none">
                     <a href="<?= get_post_type_archive_link('catalog') ?>" class="button button-green button-block">В каталог</a>
                  </div>
               </div>

               <div class="d-lg-block d-none">
                  <div class="post-section__buttons is-start">
                     <a href="<?= get_post_type_archive_link('catalog') ?>" class="button button-green">В каталог</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="section is-sm">
      <div class="container">
         <div class="section__head is-border">
            <div class="h2">Оставить заявку</div>
         </div>

         <?= do_shortcode('[contact-form-7 id="4d8ecbb" title="Оставить заявку"]'); ?>
      </div>
   </div>
</div>

<?php get_footer(); ?>
