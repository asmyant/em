<?php
$category = $args['category'];

$permalink = $category ? get_term_link($category, get_post_type() . '-category') : get_permalink();
$title = $category ? $category->name : get_the_title();
$description = $category ? term_description($category) : get_the_excerpt();

$image_id = get_image_post_type($category, true);

?>

<div class="post-grid triangle-bottom">
   <a href="<?= $permalink ?>" class="post-grid__picture">
      <?= wp_get_attachment_image($image_id, 'post-grid') ?>
   </a>

   <div class="post-grid__content">
      <a href="<?= $permalink ?>" class="h4 color-blue post-grid__title link-blue">
         <b><?= $title ?></b>
      </a>

      <div class="text-lg">
         <?= $description ?>
      </div>
   </div>

   <a href="<?= $permalink ?>" class="post-grid__link"></a>
</div>