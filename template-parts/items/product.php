<div class="product">
   <div class="product__top">
      <a href="<?= get_the_permalink(); ?>" class="product__picture">
         <?php if (get_the_post_thumbnail()) : ?>
            <?= get_the_post_thumbnail(); ?>
         <?php else : ?>
            <img src="<?= get_the_post_thumbnail_url() ?>/assets/images/placeholder/product.png" alt="<?= get_the_title(); ?>">
         <?php endif; ?>
      </a>

      <div class="product__content">
         <a href="<?= get_the_permalink(); ?>" class="h5 link-blue product__title">
            <b>
               <?= get_the_title(); ?>
            </b>
         </a>
         <div class="text-lg">
            <?= get_the_excerpt(); ?>
         </div>
      </div>
   </div>

   <?php if (get_field('types')) : ?>
      <div class="product__types">
         <?php foreach (get_field('types') as $item) : ?>
            <img src="<?= get_template_directory_uri() ?>/assets/images/cars/<?= $item ?>.svg" alt="">
         <?php endforeach; ?>
      </div>
   <?php endif; ?>

   <div class="product__buttons">
      <a href="<?= get_permalink(); ?>" class="button-green button">Подробнее</a>
      <?php if (get_field('file')) : ?>
         <a href="<?= wp_get_attachment_url(get_field('file')) ?>" download="" class="button-green button">Скачать документацию</a>
      <?php endif ?>
   </div>
</div>