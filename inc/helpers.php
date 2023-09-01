<?php

/**
 * @param bool $category
 * @param bool $grid_first
 * @return int
 */
function get_image_post_type($category = false, $grid_first = false)
{
   $images = get_field('image', $category ? $category : get_the_ID());

   $image_id = 291;

   $grid_image = $images['grid'];
   $page_image = $images['page'];

   if ($grid_first) {
      if ($grid_image) {
         $image_id = $grid_image;
      } else if ($page_image) {
         $image_id = $page_image;
      }
   } else {
      if ($page_image) {
         $image_id = $page_image;
      } else if ($grid_image) {
         $image_id = $grid_image;
      }
   }

   return $image_id;
}