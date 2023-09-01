<div class="site-mobile-menu js-mobile-menu">
   <div class="site-mobile-menu__top">
      <button class="js-mobile-menu__back">
         <svg width="18" height="18">
            <use xlink:href="<?= get_template_directory_uri() ?>/assets/images/svg-sprite.svg#left"></use>
         </svg>

         <span>Назад</span>
      </button>

      <button class="js-mobile-menu__toggle">
         <span>Закрыть</span>

         <svg width="18" height="18">
            <use xlink:href="<?= get_template_directory_uri() ?>/assets/images/svg-sprite.svg#cross"></use>
         </svg>
      </button>
   </div>

   <a href="" class="site-mobile-menu__active triangle-bottom js-mobile-menu__active"></a>

   <div class="site-mobile-menu__content">
      <?php
      wp_nav_menu(array(
         'theme_location' => 'mobile',
         'container' => 'ul',
         'depth' => 3,
      ));
      ?>
   </div>
</div>
