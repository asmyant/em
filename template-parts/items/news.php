<div class="news">
   <a href="<?= get_permalink() ?>" class="news__picture">
      <?php if (get_the_post_thumbnail()) : ?>
         <?= get_the_post_thumbnail(get_the_ID(), 'post-thumbnail'); ?>
      <?php else: ?>
         <img src="<?= get_template_directory_uri() ?>/assets/images/placeholder/news-placeholder.jpg"
              alt="<?= get_the_title(); ?>" width="400" height="400">
      <?php endif; ?>
   </a>

   <div class="news__content">
      <a href="<?= get_permalink() ?>" class="news__title h5 color-black">
         <b><?= get_the_title() ?></b>
      </a>

      <div class="news__text">
         <?= get_the_excerpt(); ?>
      </div>

      <time class="news__date"><?= get_the_date(); ?></time>
   </div>
</div>