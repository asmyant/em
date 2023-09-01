<section class="section section--catalog is-white is-sm">
   <div class="container">
      <div class="section__head is-border">
         <h2 class="h2 color-black">Наш каталог</h2>
      </div>

      <div class="text-lg color-black">Открой для себя качественные смазочные материалы</div>

      <div class="row align-items-end`">
         <div class="<?= get_field('catalog-image') ? 'col-lg-7' : '' ?>">
            <div class="catalog-list">
               <ul>
                  <?= wp_list_categories(array(
                     'taxonomy' => 'catalog-category',
                     'hierarchical' => get_field('catalog-show-submenu', 'option'),
                     'hide_empty' => 0,
                     'current_category' => 0,
                     'title_li' => '',
                     'echo' => 0
                  )) ?>
               </ul>
            </div>
         </div>
         <?php if (get_field('catalog-image')) : ?>
            <div class="col-lg-5 text-center">
               <?= wp_get_attachment_image(get_field('catalog-image'), 'post-thumbnail', '', array(
                  'class' => 'img-fluid img-round',
               )); ?>
            </div>
         <?php endif; ?>
      </div>
   </div>
</section>