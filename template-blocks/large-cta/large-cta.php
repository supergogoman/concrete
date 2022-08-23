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
 $display_image = get_field('display_image');
 $background_color = get_field('background_color');
 $overlay_color = get_field('overlay_color');

 //Content
 $image = get_field('image');
 $subtitle = get_field('subtitle');
 $title = get_field('title');
 $copy = get_field('copy');
 $button = get_field('button');

  ?>

<section id="section_large-cta" class="<?php echo $block_padding ?>" <?php echo $display_image ? null : 'style="background-color:' . $background_color .  ';"' ?>>
  <div>
    <h4><?php echo $subtitle ?></h4>
    <h2><?php echo $title ?></h2>
    <div>
      <?php echo $copy ?>
    </div>
    <?php if ($button): ?>
      <a href="<?php echo $button['url'] ?>" class="btn btn-primary"><?php echo $button['title'] ?></a>
    <?php endif; ?>
  </div>
  <?php if ($display_image): ?>
    <img class="img-cover" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
    <div class="overlay img-cover" style="background-color:<?php echo $overlay_color ?>;"></div>
  <?php endif; ?>
</section>
