<?php
/**
*
* @param   array $block The block settings and attributes.
* @param   string $content The block inner HTML (empty).
* @param   bool $is_preview True during AJAX preview.
* @param   (int|string) $post_id The post ID this block is saved to.
*/
 ?>

 <?php
 // Settings
 $block_padding = get_field('padding');
  ?>

<section id="section_example" class="container <?php echo $block_padding ?>">
  this is an example block
</section>
