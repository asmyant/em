<div class="vacancies">
   <a href="#feedback" rel="modal:open" class="h3 link-blue-dark">
      <b><?= get_the_title(); ?></b>
   </a>

   <div class="vacancies__staff text-lg">
      <svg width="36" height="36">
         <use xlink:href="<?= get_template_directory_uri() ?>/assets/images/svg-sprite.svg#bag"></use>
      </svg>
      <?= get_field('employment') ? get_field('employment') : 'Не указано' ?>
   </div>

   <div class="text-lg vacancies__text">
      <?= get_the_content(); ?>
   </div>

   <a href="#send-cv" rel="modal:open" class="button button-green">Отправить резюме</a>
</div>