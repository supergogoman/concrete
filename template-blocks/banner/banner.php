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
// Fields
$image = get_field('image');
$title = get_field('title');
$subtitle = get_field('subtitle');
$copy = get_field('copy');
 ?>

<section id="section_banner" class="">
  <div class="left-col">
    <div class="">
      <h4><?php echo $subtitle ?></h4>
      <h1><?php echo $title ?></h1>
      <p><?php echo $copy ?></p>
      <div class="">
        <?php if (have_rows('links')): ?>
          <?php $i=0; ?>
          <?php while(have_rows('links')): ?>
            <?php the_row();
            $i++;
            $link = get_sub_field('link');
            ?>
            <a class="btn <?php echo $i === 1 ? 'btn-secondary' : 'btn-primary' ?>" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="right-col">
    <img class="img-cover" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ? $image['alt'] : $image['title'] ?>">
  </div>
</section>
