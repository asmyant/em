<?php
$is_child = !empty(get_term_children(get_queried_object_id(), 'catalog-category'));

$childes = get_terms(array(
   'parent' => get_queried_object_id(),
   'taxonomy' => 'catalog-category',
   'hierarchical' => false,
));

$term = get_term(get_queried_object_id(), 'catalog-category');

$image_id = get_image_post_type($term, false);

get_header();
?>

<div class="section is-brand-bg is-sm">
   <div class="container">
      <?php get_template_part('template-parts/breadcrumb') ?>

      <div class="section__head is-border">
         <div class="section__head-row row">
            <div class="<?= get_field('description', $term) ? 'col-lg-7' : 'col-12' ?>">
               <h1 class="h2"><?= $term->name ?></h1>
            </div>
            <?php if (get_field('description', $term)) : ?>
               <div class="col-lg-5 text-lg">
                  <?= get_field('description', $term) ?>
               </div>
            <?php endif; ?>
         </div>
      </div>

      <?php if ($is_child) : ?>
         <div class="row justify-content-between">
            <div class="col-xl-6 col-md-7 text">
               <?= term_description($term) ?>
            </div>

            <div class="col-md-5">
               <?= wp_get_attachment_image($image_id, 'post-thumbnail', '', array(
                  'class' => 'img-round-right img-block'
               )); ?>
            </div>
         </div>
      <?php else: ?>
         <?php if (have_posts()) : ?>
            <div class="row row-cols-md-2 row-cols-1 products-row">

               <?php while (have_posts()): the_post(); ?>
                  <div class="col">
                     <?php get_template_part('template-parts/items/product', get_post_format()) ?>
                  </div>
               <?php endwhile; ?>

            </div>
         <?php else : ?>
            <div class="h4">Данная категория пока пустая.</div>
         <?php endif; ?>
      <?php endif; ?>
   </div>
</div>

<?php if ($is_child) : ?>
   <section class="section is-blue is-sm">
      <div class="container">
         <div class="section__head color-white">
            <h2 class="h2">Моторное масло Emarat</h2>
         </div>

         <div class="row post-grid__row">
            <?php foreach ($childes as $child) : ?>
               <div class="col-md-6">
                  <?php get_template_part('template-parts/items/post-grid', get_post_format(), array(
                     'category' => $child,
                  )); ?>
               </div>
            <?php endforeach; ?>
         </div>
      </div>
   </section>
<?php endif; ?>

<?php get_footer(); ?>
