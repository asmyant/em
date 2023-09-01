<?php get_header() ?>

   <div class="jumbotron is-full page-404">
      <div class="container">
         <div class="page-404__title"><b>404</b></div>

         <h1 class="h1"><b>Страница не найдена</b></h1>

         <div class="h3 page-404__text">
            К сожалению, такой страницы не существует.
            Вероятно, она была удалена или введен
            некорректный адрес.
         </div>

         <a href="<?= home_url() ?>" class="button button-green">Вернуться на главную</a>
      </div>
   </div>

<?php get_footer() ?>