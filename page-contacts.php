<?php
$phone = get_field('contacts-phone', 'option');
$mail = get_field('contacts-mail', 'option');
$address = get_field('contacts-address', 'option');
$index = get_field('contacts-index', 'option');
$warehouses = get_field('warehouses');
?>


<?php get_header(); ?>

   <div class="section is-brand-bg is-sm">
      <div class="container">
         <?php get_template_part('template-parts/breadcrumb') ?>

         <div class="section__head is-border">
            <div class="section__head-row row">
               <div class="col-lg-6">
                  <h1 class="h2"><?= get_the_title() ?></h1>
               </div>
               <div class="col-lg-6">
                  <div class="text-lg">
                     <?= get_the_content(); ?>
                  </div>
               </div>
            </div>
         </div>

         <div class="row contacts-all">
            <div class="col-lg-4">
               <div class="h4 mb-10"><b>Центральный склад</b></div>

               <div class="text-xl mb-10">
                  <?= $address ?>

                  <?php if ($index) : ?>
                     Почтовый индекс: <?= $index ?>
                  <?php endif; ?>
               </div>

               <div class="h4 mb-5"><b>Контактные данные</b></div>

               <div class="text-xl map__contacts">
                  <?php if ($phone) : ?>
                     <a href="tel:<?= str_replace($phone, ' ', '') ?>" class="link-blue-dark action mb-10">
                  <span>
                     <svg width="20" height="20">
                        <use xlink:href="<?= get_template_directory_uri() ?>/assets/images/svg-sprite.svg#phone"></use>
                     </svg>
                  </span>
                        <?= $phone ?>
                     </a>
                  <?php endif; ?>

                  <?php if ($mail) : ?>
                     <a href="mailto:<?= $mail ?>" class="link-blue-dark action">
                     <span>
                        <svg width="20" height="20">
                           <use
                              xlink:href="<?= get_template_directory_uri() ?>/assets/images/svg-sprite.svg#envelope"></use>
                        </svg>
                     </span>
                        <?= $mail ?>
                     </a>
                  <?php endif; ?>
               </div>
            </div>

            <?php if ($warehouses) : ?>
               <div class="col-lg-8">
                  <div class="row">
                     <?php foreach ($warehouses as $warehouse) : ?>
                        <div class="col-lg-6">
                           <div class="text-xl mb-5"><b>Склад в <?= $warehouse['city'] ?>:</b></div>

                           <div class="mb-10">
                              <?= $warehouse['address'] ?>
                           </div>

                           <div class="text-lg mb-5"><b>Контактные данные:</b></div>

                           <div class="contacts-list mb-5">
                              <?php if ($warehouse['phone']) : ?>
                                 <a href="tel:<?= str_replace($warehouse['phone'], ' ', '') ?>"
                                    class="link-blue-dark action">
                                    <span>
                                       <svg width="20" height="20">
                                          <use
                                             xlink:href="<?= get_template_directory_uri() ?>/assets/images/svg-sprite.svg#phone"></use>
                                       </svg>
                                    </span>
                                    <?= $warehouse['phone'] ?>
                                 </a>
                              <?php endif; ?>

                              <?php if ($warehouse['email']) : ?>
                                 <a href="mailto:<?= $warehouse['email'] ?>" class="link-blue-dark action">
                                    <span>
                                       <svg width="20" height="20">
                                          <use
                                             xlink:href="<?= get_template_directory_uri() ?>/assets/images/svg-sprite.svg#envelope"></use>
                                       </svg>
                                    </span>
                                    <?= $warehouse['email'] ?>
                                 </a>
                              <?php endif; ?>
                           </div>
                        </div>
                     <?php endforeach; ?>
                  </div>
               </div>
            <?php endif; ?>
         </div>

         <div class="mt-4">
            <?= do_shortcode('[contact-form-7 id="4d8ecbb" title="Оставить заявку"]'); ?>
         </div>
      </div>
   </div>

   <div class="map">
      <div class="container">
         <div class="panel map__panel">
            <div class="h4 mb-10"><b>Центральный склад</b></div>

            <div class="text-xl mb-10">
               <?= $address ?>

               <?php if ($index) : ?>
                  Почтовый индекс: <?= $index ?>
               <?php endif; ?>
            </div>

            <div class="h4 mb-10"><b>Контактные данные</b></div>

            <div class="text-xl map__contacts">
               <?php if ($phone) : ?>
                  <a href="tel:<?= str_replace($phone, ' ', '') ?>" class="link-blue-dark action mb-10">
                  <span>
                     <svg width="20" height="20">
                        <use xlink:href="<?= get_template_directory_uri() ?>/assets/images/svg-sprite.svg#phone"></use>
                     </svg>
                  </span>
                     <?= $phone ?>
                  </a>
               <?php endif; ?>

               <?php if ($mail) : ?>
                  <a href="mailto:<?= $mail ?>" class="link-blue-dark action">
                     <span>
                        <svg width="20" height="20">
                           <use
                              xlink:href="<?= get_template_directory_uri() ?>/assets/images/svg-sprite.svg#envelope"></use>
                        </svg>
                     </span>
                     <?= $mail ?>
                  </a>
               <?php endif; ?>
            </div>
         </div>
      </div>

      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A659132e343d2eda0c677588bd70c4c51174dc7b29c4aee69fe8bbb6b7f513154&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
      <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A659132e343d2eda0c677588bd70c4c51174dc7b29c4aee69fe8bbb6b7f513154&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
   </div>

<?php get_footer(); ?>