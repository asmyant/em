<?php
$category = $args['category'];

$size_image = 'post-grid';

$permalink = $category ? get_term_link($category, get_post_type() . '-category') : get_permalink();
$title = $category ? $category->name : get_the_title();
$description = $category ? false : get_the_excerpt();

$image_id = get_image_post_type($category, true);
?>

<div class="post-inline is-round triangle-bottom">
   <div class="row post-inline__row">
      <div class="col-md-7">
         <a href="<?= $permalink ?>" class="post-inline__image">
            <?= wp_get_attachment_image($image_id, 'post-thumbnail') ?>
         </a>
      </div>
      <div class="col-md-5">
         <div class="post-inline__content">
            <a href="<?= $permalink ?>" class="h3 post-inline__title link-blue"><b><?= $title ?></b></a>

            <?php if ($description) : ?>
               <div class="text-lg">
                  <?= $description; ?>
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
</div>