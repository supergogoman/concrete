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

 //Content
 $subtitle = get_field('subtitle');
 $title = get_field('title');
 $copy = get_field('copy');
 $button = get_field('button');
  ?>

<section id="section_small-cta" class="<?php echo $block_padding ?>">
  <div class="container">
    <div class="left-col">
      <div class="">
        <h4><?php echo $subtitle ?></h4>
        <h2><?php echo $title ?></h2>
        <div>
          <?php echo $copy ?>
        </div>
      </div>
    </div>
    <div class="right-col">
      <?php if ($button): ?>
        <a href="<?php echo $button['url'] ?>" class="btn btn-secondary"><?php echo $button['title'] ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>
