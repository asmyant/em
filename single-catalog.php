<?php
$types = [
   'type1' => 'Коммерческий транспорт',
   'type2' => 'С/х техника',
   'type3' => 'Дорожно - строительная и горно - добывающая техника.',
   'type4' => 'Liquified Natural Gas',
   'type5' => 'Грузовой транспорт',
];

$gallery = get_field('gallery');

get_header();
?>
<div class="section is-brand-bg is-sm">
   <div class="container">
      <?php get_template_part('template-parts/breadcrumb') ?>

      <div class="section__head is-border">
         <div class="section__head-row row">
            <div class="col-lg-8">
               <h1 class="h2"><?= get_the_title(); ?></h1>
            </div>
            <div class="col-lg-4 text-lg-right">
               <a href="#feedback" rel="modal:open" class="button button-green">Свяжитесь с нами</a>
            </div>
         </div>
      </div>

      <div class="row product-single">
         <div class="col-md-5">
            <div class="panel is-round">
               <?php if ($gallery) : ?>
                  <div class="js-one-slider">
                     <?php foreach ($gallery as $id) : ?>
                        <div class="item">
                           <?= wp_get_attachment_image($id, 'post-thumbnail', '', array(
                              'class' => 'img-fluid img-rounded'
                           )) ?>
                        </div>
                     <?php endforeach; ?>
                  </div>
               <?php else : ?>
                  <?= get_the_post_thumbnail(get_the_ID(), 'post-thumbnail', array(
                     'class' => 'img-fluid'
                  )); ?>
               <?php endif; ?>
            </div>
         </div>

         <div class="col-md-7">
            <div class="panel text-lg product__props">
               <?php if (get_the_content()) : ?>
                  <div>
                     <b style="float: left; margin-right: 5px; ">Описание: </b>
                     <div> <?= get_the_content(); ?></div>
                  </div>
               <?php endif; ?>

               <?php if (get_field('types')): ?>
                  <div>
                     <b>Области применения</b>
                     <ul class="product__types-list">
                        <?php foreach (get_field('types') as $type) : ?>
                           <li>
                              <span><?= $types[$type] ?></span>
                              <div>
                                 <img
                                    src="<?= get_template_directory_uri() ?>/assets/images/cars/<?= $type ?>.svg"
                                    alt="<?= $types[$type] ?>"
                                 >

                                 <?php if ($type == 'type1' || $type == 'type5') : ?>
                                    <img
                                       src="<?= get_template_directory_uri() ?>/assets/images/cars/<?= $type ?>-1.svg"
                                       alt="<?= $types[$type] ?>"
                                    >
                                 <?php endif; ?>
                              </div>
                           </li>
                        <?php endforeach; ?>
                     </ul>
                  </div>
               <?php endif; ?>

               <?php if (get_field('package')) : ?>
                  <div>
                     <b>Упаковка:</b> <?= get_field('package') ?>
                  </div>
               <?php endif; ?>

               <?php if (get_field('certificates')) : ?>
                  <div>
                     <b>Спецификации: </b> <?= get_field('certificates') ?>
                  </div>
               <?php endif; ?>

               <?php if (get_field('file')) : ?>
                  <a href="<?= wp_get_attachment_url(get_field('file')) ?>" download="" class="button-green button">Скачать документацию</a>
               <?php endif ?>
            </div>
         </div>
      </div>
   </div>
</div>

<?php if (get_field('description')) : ?>
   <div class="section is-sm is-blue color-white">
      <div class="container">
         <div class="section__head color-white">
            <h4 class="h4"><b>Особенности и преимущества</b></h4>
         </div>

         <div class="text is-white">
            <?= get_field('description') ?>
         </div>
      </div>
   </div>
<?php endif; ?>
<?php get_footer(); ?>
