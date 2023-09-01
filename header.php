<?php
$image = false;

if (is_archive() && !is_tax()) {
   if(get_field('archive-' . get_post_type(), 'option')) {
      $image = get_field('archive-' . get_post_type(), 'option');
   } else {
      $image = wp_get_attachment_image_url(320);
   }
} else if (is_page()) {
   $image = get_field('bg');
} else if (is_single()) {
   if (get_field('bg')) {
      $image = get_field('bg');
   } else if (get_field('archive-' . get_post_type(), 'option')) {
      $image = get_field('archive-' . get_post_type(), 'option');
   }
} else if (is_home()) {
   $image = get_field('bg');
} else if (is_tax()) {
   if (get_field('bg', get_queried_object())) {
      $image = get_field('bg', get_queried_object());
   } else if(get_field('archive-' . get_post_type(), 'option')) {
      $image = get_field('archive-' . get_post_type(), 'option');
   } else {
      $image = wp_get_attachment_image_url(320, 'full');
   }
}

if ($image === null || $image === '') {
   $image = false;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
   <meta charset="<?php bloginfo('charset'); ?>"/>
   <meta name="viewport" content="width=device-width, initial-scale=1"/>
   <?php wp_head(); ?>
</head>
<body <?php body_class('no-transition'); ?>>

<?php wp_body_open(); ?>

<?php if (!is_front_page() && !is_404()) : ?>
<header class="site-header <?= $image ? '' : 'is-bg' ?>">
   <?php else : ?>
   <header class="site-header">
      <?php endif; ?>
      <div class="container">
         <div class="site-header__row">
            <a href="<?= home_url() ?>" class="site-header__brand">
               <img src="<?= get_field('logo-header', 'option'); ?>" alt="<?= bloginfo('name') ?>" width="120">
            </a>

            <div class="site-header__right">
               <div class="site-header__top">
                  <div class="logo">
                     <div class="logo__title"><?= get_field('logo-title', 'option'); ?></div>
                     <div class="logo__subtitle"><?= get_field('logo-description', 'option') ?></div>
                  </div>

                  <div class="site-header__feedback">
                     <a href="tel:<?= str_replace(get_field('contacts-phone', 'option'), ' ', '') ?>"
                        class="site-header__phone is-desktop">
                        <svg width="16" height="16">
                           <use
                              xlink:href="<?= get_template_directory_uri() ?>/assets/images/svg-sprite.svg#phone"></use>
                        </svg>
                        <?= get_field('contacts-phone', 'option') ?>
                     </a>

                     <a href="#feedback" rel="modal:open" class="site-header__button" data-title="Заказать звонок">Заказать звонок</a>

                     <button type="button" class="site-header__burger js-mobile-menu__toggle">
                        <svg width="20" height="28">
                           <use
                              xlink:href="<?= get_template_directory_uri() ?>/assets/images/svg-sprite.svg#burger"></use>
                        </svg>
                     </button>
                  </div>
               </div>

               <a href="tel:<?= str_replace(get_field('contacts-phone', 'option'), ' ', '') ?>"
                  class="site-header__phone is-mobile">
                  <svg width="16" height="16">
                     <use xlink:href="<?= get_template_directory_uri() ?>/assets/images/svg-sprite.svg#phone"></use>
                  </svg>
                  <?= get_field('contacts-phone', 'option') ?>
               </a>

               <div class="site-header__bottom">
                  <?php wp_nav_menu(array(
                     'theme_location' => 'header',
                     'menu_class' => 'site-header__menu site-menu',
                     'container' => 'ul'
                  )); ?>

                  <?= do_shortcode('[wpdreams_ajaxsearchlite]') ?>
               </div>
            </div>
         </div>
      </div>
   </header>

   <main class="site-main">
      <?php if (!is_404()) : ?>
         <?php if (is_front_page() || is_home()) : ?>
            <div class="jumbotron is-home"
                 style="background-image: url(<?= $image ?>">
               <div class="jumbotron__container container">
                  <a href="<?= get_permalink(get_page_by_path('about')); ?>" class="jumbotron__content triangle-bottom text-lg">
                     <?= get_the_content(); ?>
                  </a>
               </div>
            </div>
         <?php else: ?>
            <?php if ($image) : ?>
               <div class="jumbotron is-page" style="background-image: url('<?= $image ?>')"></div>
            <?php endif; ?>
         <?php endif; ?>
      <?php endif; ?>
