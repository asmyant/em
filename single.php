<?php get_header(); ?>

   <div class="section is-brand-bg is-sm">
      <div class="container">
         <?php get_template_part('template-parts/breadcrumb') ?>

         <div class="section__head is-border">
            <div class="section__head-row row">
               <div class="col-lg-9">
                  <h1 class="h2">
                    <?= get_the_title(); ?>
                  </h1>
               </div>
               <div class="col-lg-3 text-lg-right">
                  <a href="#feedback" rel="modal:open" class="button button-green">Свяжитесь с нами</a>
               </div>
            </div>
         </div>

         <div class="text">
            <?= get_the_content(); ?>
         </div>
      </div>
   </div>


<?php get_footer(); ?>