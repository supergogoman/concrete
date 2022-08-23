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

<?php
// Form Fields
$form_title = get_field('form_title');
$form_copy = get_field('form_copy');
$form_start_title = get_field('form_start_title');

$acknowledge = get_field('acknowledgement_pane');
$success = get_field('success_pane');
$error_btn_text = get_field('error_btn_text');
 ?>

<?php
// Content Fields
$title = get_field('title');
$copy = get_field('copy');
?>

<section id="section_step-form" class="<?php echo $block_padding ?>">
  <div id="content-wrap" class="container">
    <div class="form-wrap">
      <form class="step-form" method="post">
        <input type="hidden" name="form_name" value="<?php echo $form_title ?>" class="form-input">
        <div class="error-modal">
          <div class="error-response">
            <ul class="response-inner"></ul>
            <button type="button" name="button" class="modal-dismiss"><?php echo $error_btn_text ? $error_btn_text : 'Okay' ?></button>
            <div class="modal-background"></div>
          </div>
        </div>
        <div id="form-pane-0" class="active-pane form-pane first-pane">
          <div>
            <h3><?php echo $form_title ?></h3>
            <p><?php echo $form_copy ?></p>
            <div id="form-controls">
              <button type="button" name="button" class="next-pane"><?php echo $form_start_title ? $form_start_title : "Let's Start" ?></button>
            </div>
          </div>
        </div>
        <?php if (have_rows('form_panes')): ?>
          <?php $i = 0; ?>
          <?php while(have_rows('form_panes')): ?>
            <?php the_row();
              $i++;
              $step_title = get_sub_field('step_title');
              $input_type = get_sub_field('input_type');
              $input_name = get_sub_field('input_name');
              $input_placeholder = get_sub_field('input_placeholder');
              $form_instruction = get_sub_field('form_instruction');
            ?>

            <div id="form-pane-<?php echo $i ?>" class="form-pane">
              <div>
                <h6>Step <?php echo $i ?></h6>
                <h3><?php echo $step_title ?></h3>
                <?php if ($form_instruction): ?>
                  <p class="pane-innstruction"><?php echo $form_instruction ?></p>
                <?php endif; ?>
                <?php if ($input_type === 'first_name'): ?>
                  <input type="text" name="first_name" value="" placeholder="<?php echo $input_placeholder ?>" class="form-input">
                <?php endif; ?>
                <?php if ($input_type === 'last_name'): ?>
                  <input type="text" name="last_name" value="" placeholder="<?php echo $input_placeholder ?>" class="form-input">
                <?php endif; ?>
                <?php if ($input_type === 'postcode'): ?>
                  <input type="text" name="postcode" value="" placeholder="<?php echo $input_placeholder ?>" class="form-input">
                <?php endif; ?>
                <?php if ($input_type === 'email'): ?>
                  <input type="email" name="email" value="" placeholder="<?php echo $input_placeholder ?>" class="form-input">
                <?php endif; ?>
                <?php if ($input_type === 'tel'): ?>
                  <input type="tel" name="phone" value="" placeholder="<?php echo $input_placeholder ?>" class="form-input">
                <?php endif; ?>
                <?php if ($input_type === 'file'): ?>
                  <input type="file" name="file" value="" class="form-input">
                <?php endif; ?>
                <?php if ($input_type === 'text'): ?>
                  <input type="text" name="step_<?php echo $i ?>" value="" placeholder="<?php echo $input_placeholder ?>" class="form-input q-and-a" data-title="<?php echo $step_title ?>">
                <?php endif; ?>
                <?php if ($input_type === 'textarea'): ?>
                  <textarea name="step_<?php echo $i ?>" rows="5" cols="80" placeholder="<?php echo $input_placeholder ?>" class="form-input q-and-a" data-title="<?php echo $step_title ?>"></textarea>
                <?php endif; ?>

                <div id="form-controls">
                  <button type="button" name="button" class="prev-pane">Back</button>
                  <button type="button" name="button" class="next-pane">Next</button>
                </div>
              </div>
            </div>

          <?php endwhile; ?>

          <div id="form-pane-<?php echo $i+1 ?>" class="form-pane">
            <div class="">
              <h3><?php echo $acknowledge['title'] ?></h3>
              <?php if ($acknowledge['copy']): ?>
                <p><?php echo $acknowledge['copy'] ?></p>
              <?php endif; ?>
              <div id="form-controls">
                <button type="button" name="button" class="prev-pane">Back</button>
                <button type="button" name="button" class="submit-form"><?php echo $acknowledge['button'] ? $acknowledge['button'] : 'Submit' ?></button>
              </div>
            </div>
          </div>

          <div class="form-pane success-pane">
            <div class="">
              <div class="success-msg-wap">
                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="check-circle" class="svg-inline--fa fa-check-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg>
                <h3><?php echo $success['title'] ?></h3>
              </div>
              <?php if ($success['copy']): ?>
                <p><?php echo $success['copy'] ?></p>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>
        <div class="spin"></div>
      </form>
    </div>
    <div class="right-col">
      <div>
        <h3><?php echo $title ?></h3>
        <div><?php echo $copy ?></div>
      </div>
    </div>
  </div>
</section>
