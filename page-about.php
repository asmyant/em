<?php
get_header()
?>

<div class="is-brand-bg">
   <div class="section is-sm">
      <div class="container">
         <?php get_template_part('template-parts/breadcrumb'); ?>

         <div class="section__head is-border">
            <h1 class="h2"><?= get_the_title(); ?></h1>
         </div>

         <div class="row">
            <div class="col-lg-5 post-section__picture">
               <?= get_the_post_thumbnail(get_the_ID(), 'post-thumbnail', array(
                  'class' => 'img-fluid img-round'
               )); ?>
            </div>

            <div class="col-lg-7 post-section__wrapper is-between">
               <div class="text-lg color-black post-section__content">
                  <?= get_the_content(); ?>

                  <div class="row d-lg-none">
                     <div class="col-6">
                        <a href="<?= get_post_type_archive_link('catalog'); ?>"
                           class="button button-green button-block">В каталог</a>
                     </div>
                     <div class="col-6">
                        <a href="#feedback" data-title="Свяжитесь с нами" rel="modal:open"
                           class="button button-green button-block">Свяжитесь с нами</a>
                     </div>
                  </div>
               </div>

               <div class="d-lg-block d-none">
                  <div class="post-section__buttons">
                     <a href="<?= get_post_type_archive_link('catalog'); ?>" class="button button-green">В каталог</a>
                     <a href="#feedback" data-title="Свяжитесь с нами" rel="modal:open" class="button button-green">
                        Свяжитесь с нами
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="section pt-0">
      <div class="container">
         <?php if (get_field('type') === 'link') : ?>
            <iframe src="<?= get_field('video-link') ?>" class="about-video"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
         <?php else: ?>
            <video controls class="about-video">
               <source src="<?= wp_get_attachment_url(get_field('video-file')) ?>" type="video/mp4">
            </video>
         <?php endif; ?>
      </div>
   </div>
</div>

<?php get_footer(); ?>
