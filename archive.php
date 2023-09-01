<?php

global $wp_query;

get_header();
?>
   <div class="section is-brand-bg is-sm">
      <div class="container">
         <?= get_template_part('template-parts/breadcrumb') ?>

         <div class="section__head is-border">
            <div class="row section__head-row">
               <div class="col-5">
                  <h1 class="h2">Новости</h1>
               </div>
               <div class="col-7 text-right">
                  <a href="#feedback" data-title="Свяжитесь с нами" rel="modal:open" class="button button-green">Свяжитесь с нами</a>
               </div>
            </div>
         </div>

         <?php if (have_posts()) : ?>
            <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 news-row js-load-more-container">
               <?php while (have_posts()) : the_post(); ?>
                  <div class="col">
                     <?php get_template_part('template-parts/items/news', get_post_format()) ?>
                  </div>
               <?php endwhile;
               wp_reset_postdata(); ?>
            </div>
         <?php endif; ?>

         <?php if ($wp_query->max_num_pages != 1) : ?>
            <div class="text-center">
               <button
                  type="button"
                  class="link-load text-lg js-ajax-load-more"
                  data-post-type="post"
                  data-action="news_load_more"
                  data-max="<?= $wp_query->max_num_pages ?>"
               >
                  <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M11.347 0.309863C11.4395 0.208777 11.549 0.129333 11.6693 0.0761719C11.7895 0.0230107 11.9181 -0.00280222 12.0473 0.000241536C12.1766 0.00328529 12.304 0.0351248 12.4222 0.0938994C12.5403 0.152674 12.6468 0.237206 12.7354 0.342557C12.824 0.447908 12.893 0.571965 12.9383 0.707483C12.9836 0.843001 13.0043 0.987262 12.9992 1.13184C12.9942 1.27642 12.9634 1.41841 12.9087 1.54953C12.854 1.68064 12.7766 1.79825 12.6808 1.89549L7.16629 7.70363C6.98613 7.89397 6.74776 8 6.5 8C6.25224 8 6.01387 7.89397 5.83371 7.70363L0.319173 1.89549C0.223427 1.79825 0.145955 1.68064 0.0912831 1.54953C0.036611 1.41841 0.00583483 1.27642 0.000752203 1.13184C-0.00433042 0.987262 0.0163826 0.843 0.0616811 0.707482C0.10698 0.571965 0.175956 0.447907 0.26458 0.342556C0.353204 0.237205 0.459699 0.152674 0.577844 0.0938989C0.69599 0.0351243 0.823417 0.0032848 0.952682 0.000241051C1.08195 -0.0028027 1.21046 0.0230102 1.33071 0.0761715C1.45096 0.129333 1.56054 0.208777 1.65304 0.309862L6.49935 5.41522L11.347 0.309863Z"
                        fill="#464E4C"/>
                  </svg>
                  <span>Ещё новости</span>
               </button>
            </div>
         <?php endif; ?>
      </div>
   </div>

<?php get_footer() ?>