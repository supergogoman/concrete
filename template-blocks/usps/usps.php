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
$background_color = get_field('background_color');
 ?>

<section id="section_usps" class="container <?php echo $block_padding ?>" <?php echo $background_color ? 'style="background-color:'. $background_color . ';"' : null ?>>
  <?php if (have_rows('usp_list')): ?>
    <?php while(have_rows('usp_list')): ?>
      <?php the_row();
        $icon = get_sub_field('icon');
        $title = get_sub_field('title');
        $copy = get_sub_field('copy');
      ?>
      <div class="usp-item">
        <div class="usp-inner">
          <div class="icon-wrap">
            <?php echo $icon ?>
          </div>
          <div class="content-wrap">
            <h4><?php echo $title ?></h4>
            <p><?php echo $copy ?></p>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</section>
