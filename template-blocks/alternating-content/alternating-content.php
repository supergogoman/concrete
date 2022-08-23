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
// Style Controls
$block_padding = get_field('padding');
$image_left = get_field('display_image_left');
?>

<?php
 // Text Content
 $display_accordion = get_field('display_accordion');
 $subtitle = get_field('subtitle');
 $title = get_field('title');
 $copy = get_field('copy');
 $button = get_field('button');
?>

<?php
// Image Content
$display_slider = get_field('display_slider');
$image = get_field('image');
$image_alt = get_field('image_alt');
?>

<section id="section_alt-content" class="container <?php echo $block_padding ?> <?php echo $image_left ? 'img-left' : null ?>">
  <div class="left-col">
    <?php if ($display_accordion): ?>
      <div class="acc-wrap">
        <?php if (have_rows('accordion')): ?>
          <?php $i = 0; ?>
          <?php while(have_rows('accordion')): ?>
            <?php the_row();
              $i++;
              $title = get_sub_field('title');
              $copy = get_sub_field('copy');
            ?>
            <div class="acc-item">
              <div class="acc-head <?php echo $i == 1 ? 'acc-active' : null ?>">
                <h3><?php echo $title ?></h3>
                <div class="icon-wrap">
                  <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="plus" class="svg-inline--fa fa-plus fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M376 232H216V72c0-4.42-3.58-8-8-8h-32c-4.42 0-8 3.58-8 8v160H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h160v160c0 4.42 3.58 8 8 8h32c4.42 0 8-3.58 8-8V280h160c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z"></path></svg>
                  <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="minus" class="svg-inline--fa fa-minus fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M376 232H8c-4.42 0-8 3.58-8 8v32c0 4.42 3.58 8 8 8h368c4.42 0 8-3.58 8-8v-32c0-4.42-3.58-8-8-8z"></path></svg>
                </div>
              </div>
              <div class="acc-body <?php echo $i != 1 ? 'hidden' : null ?>">
                <?php echo $copy ?>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <?php else: ?>
        <div class="content-wrap">
          <h4><?php echo $subtitle ?></h4>
          <h2><?php echo $title ?></h2>
          <div>
            <?php echo $copy ?>
          </div>
          <?php if ($button): ?>
            <a href="<?php echo $button['url'] ?>" class="btn btn-primary"><?php echo $button['title'] ?></a>
          <?php endif; ?>
        </div>
    <?php endif; ?>
  </div>
  <div class="right-col <?php echo $display_slider ? 'alt-slider' : 'img-wrap' ?>">
    <?php if ($display_slider): ?>
        <?php if (have_rows('images')): ?>
          <?php while(have_rows('images')): ?>
            <?php the_row();
              $image = get_sub_field('image');
              $image_alt = get_sub_field('image_alt');
            ?>
            <img class="img-cover" src="<?php echo $image['url'] ?>" alt="<?php echo $image_alt ?>">
          <?php endwhile; ?>
        <?php endif; ?>
      <?php else: ?>
        <img class="img-cover" src="<?php echo $image['url'] ?>" alt="<?php echo $image_alt ?>">
    <?php endif; ?>
  </div>
</section>
