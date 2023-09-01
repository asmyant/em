<?php
$about = get_post('58');
?>

<section class="section is-brand-bg section--about">
   <div class="container">
      <div class="section__head">
         <h2 class="h2"><?= $about->post_title ?></h2>
      </div>

      <?php if (get_field('slogan', $about->ID)): ?>
         <div class="text-lg post-section__title d-lg-none">
            <?= get_field('slogan', $about->ID) ?>
         </div>
      <?php endif; ?>

      <div class="row">
         <div class="col-lg-5 post-section__picture">
            <?= get_the_post_thumbnail($about->ID, 'post-thumbnail', array(
               'class' => 'img-fluid img-round'
            )) ?>
         </div>

         <div class="col-lg-7 post-section__wrapper">
            <?php if (get_field('slogan', $about->ID)): ?>
               <div class="text-lg post-section__title d-lg-block d-none">
                  <?= get_field('slogan', $about->ID) ?>
               </div>
            <?php endif; ?>

            <div class="text-lg color-black post-section__content">
               <?= $about->post_content ?>

               <div class="row d-lg-none">
                  <div class="col-6">
                     <a href="<?= get_post_type_archive_link('catalog') ?>" class="button button-green button-block">
                        В каталог
                     </a>
                  </div>
                  <div class="col-6">
                     <a href="#feedback" data-title="Свяжитесь с нами" rel="modal:open" class="button button-green button-block">
                        Свяжитесь с нами
                     </a>
                  </div>
               </div>
            </div>

            <div class="d-lg-block d-none">
               <div class="post-section__buttons">
                  <a href="<?= get_post_type_archive_link('catalog') ?>" class="button button-green">В каталог</a>
                  <a href="#feedback" data-title="Свяжитесь с нами" rel="modal:open" class="button button-green">Свяжитесь с нами</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>