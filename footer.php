<?php
$socials = ['vk', 'ok', 'instagram', 'telegram', 'viber', 'whatsapp'];
?>

</main>

<?php if (!is_404()) : ?>
   <footer class="site-footer"
           style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/bgs/footer.jpg')">
      <div class="container">
         <nav class="site-footer__socials">
            <?php foreach ($socials as $social) : ?>
               <?php if (get_field($social, 'option')) : ?>
                  <a href="<?= get_field($social, 'option') ?>" target="_blank">
                     <img
                        src="<?= get_template_directory_uri() ?>/assets/images/socials/<?= $social ?>.svg"
                        alt="<?= $social ?>"
                        width="30"
                     />

                  </a>
               <?php endif; ?>
            <?php endforeach; ?>
         </nav>

         <div class="site-footer__main">
            <div class="row site-footer__row">
               <div class="col-md-3 site-footer__left">
                  <a href="<?= home_url() ?>">
                     <img src="<?= get_field('logo-footer', 'option') ?>" alt="<?= bloginfo('name') ?>" width="90">
                  </a>

                  <div class="logo-short">
                     <div class="logo-short__title"><?= get_field('logo-title', 'option') ?></div>
                     <div class="logo-short__subtitle"><?= get_field('logo-description', 'option') ?></div>
                  </div>
               </div>

               <div class="col-md-3 col-6">
                  <?php wp_nav_menu(array(
                     'theme_location' => 'footer-1',
                     'menu_class' => 'site-footer__list',
                     'container' => 'ul'
                  )); ?>
               </div>

               <div class="col-md-3 col-6">
                  <?php wp_nav_menu(array(
                     'theme_location' => 'footer-2',
                     'menu_class' => 'site-footer__list',
                     'container' => 'ul'
                  )); ?>
               </div>

               <div class="col-md-3">
                  <div class="site-footer__contacts">
                     <?php if (get_field('contacts-mail', 'option')) : ?>
                        <div>
                           <b>Email:</b>
                           <a href="mailto:<?= get_field('contacts-mail', 'option') ?>">
                              <b><?= get_field('contacts-mail', 'option') ?></b>
                           </a>
                        </div>
                     <?php endif; ?>

                     <?php if (get_field('contacts-phone', 'option')) : ?>
                        <div>
                           <b>Тел.:</b>
                           <a href="tel:<?= str_replace(get_field('contacts-phone', 'option'), ' ', '') ?>">
                              <b><?= get_field('contacts-phone', 'option') ?></b>
                           </a>
                        </div>
                     <?php endif; ?>

                     <a href="#feedback" data-title="Заказать звонок" rel="modal:open" type="button"
                        class="site-header__button">Заказать звонок</a>

                     <div>
                        <?= get_field('contacts-address', 'option') ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="site-footer__bottom">
            <div class="site-footer__privacy">
               <a href="<?= home_url() ?>/sitemap_index.xml" target="_blank">Карта сайта</a>
               <a href="<?= get_permalink(get_page_by_path('policy')) ?>">Политика конфиденцальности</a>
            </div>

            <div class="site-footer__copyright">
               <svg width="16" height="16">
                  <use xlink:href="<?= get_template_directory_uri() ?>/assets/images/svg-sprite.svg#copyright"></use>
               </svg>
               <?= date('Y') ?> <?= bloginfo('name') ?>
            </div>
         </div>
      </div>
   </footer>
<?php endif; ?>

<?php get_template_part('template-parts/form/feedback') ?>
<?php get_template_part('template-parts/form/cv') ?>
<?php get_template_part('template-parts/form/callback') ?>
<?php get_template_part('template-parts/mobile-menu') ?>

<?php wp_footer(); ?>
</body>
</html>
