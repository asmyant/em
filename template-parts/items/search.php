<div class="post-search">
   <?php if (get_the_post_thumbnail()) : ?>
      <a href="=<?= get_permalink(); ?>" class="post-search__left">
         <b><?= get_the_post_thumbnail(get_the_ID(), 'thumbnail'); ?></b>
      </a>
   <?php endif; ?>
   <div>
      <a href="<?= get_permalink(); ?>" class="h4 post-search__title">
         <?= get_the_title(); ?>
      </a>
      <?= get_the_excerpt(); ?>
   </div>
</div>