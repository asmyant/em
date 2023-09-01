<?php
get_header();

$term_id = get_queried_object_id();

$categories = get_terms(array(
   'taxonomy' => 'catalog-category',
   'hierarchical' => false,
   'parent' => 0
));
?>

   <div class="section is-brand-bg is-sm">
      <div class="container">
         <?php get_template_part('template-parts/breadcrumb') ?>

         <div class="section__head is-border">
            <h1 class="h2">Наш каталог</h1>
         </div>

         <?php if ($categories) : ?>
            <div>
               <?php
               foreach ($categories as $category) :
                  get_template_part('template-parts/items/post-inline', get_post_format(), array(
                     'category' => $category,
                  ));
               endforeach;
               ?>
            </div>
         <?php endif; ?>

      </div>
   </div>

<?php
get_template_part('template-parts/front-page/cooperation');
get_footer();
?>