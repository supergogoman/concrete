<?php

// add following to functions.php to register new blocks

/*
** require get_template_directory() . '/task-blocks/block-register.php';
*/


function my_acf_init_block_types() {
    if( function_exists('acf_register_block_type') ) {

			// Example
			acf_register_block_type(array(
					'name'              => 'example',
					'title'             => __('Example'),
					'description'       => __('Example Description'),
					'render_template'   => 'template-blocks/example/example.php',
					'category'          => 'formatting',
					'icon'              => 'admin-generic',
					'keywords'          => array( 'example')
			));

      // Banner
      acf_register_block_type(array(
          'name'              => 'banner',
          'title'             => __('Banner'),
          'description'       => __('Hero Banner'),
          'render_template'   => 'template-blocks/banner/banner.php',
          'category'          => 'formatting',
          'icon'              => 'format-image',
          'keywords'          => array( 'banner', 'image', 'full width')
      ));

      // USPS
      acf_register_block_type(array(
          'name'              => 'usps',
          'title'             => __('USPs'),
          'description'       => __('USP grid to showcase succinct selling points.'),
          'render_template'   => 'template-blocks/usps/usps.php',
          'category'          => 'formatting',
          'icon'              => 'screenoptions',
          'keywords'          => array( 'USP', 'icons')
      ));

      // Alternating Content
      acf_register_block_type(array(
          'name'              => 'alternating-content',
          'title'             => __('Alternating Content'),
          'description'       => __('Flexible 50/50 text content and image block'),
          'render_template'   => 'template-blocks/alternating-content/alternating-content.php',
          'category'          => 'formatting',
          'icon'              => 'columns',
          'keywords'          => array( 'Text', 'Image', 'FAQ')
      ));

      // Large CTA
      acf_register_block_type(array(
          'name'              => 'large-cta',
          'title'             => __('Large Call To Action'),
          'description'       => __('Large call to action section featuring images or content'),
          'render_template'   => 'template-blocks/large-cta/large-cta.php',
          'category'          => 'formatting',
          'icon'              => 'align-wide',
          'keywords'          => array( 'CTA', 'Call To Action', 'Image')
      ));

      // Small CTA
      acf_register_block_type(array(
          'name'              => 'small-cta',
          'title'             => __('Small Call To Action'),
          'description'       => __('Small call to action section featuring content'),
          'render_template'   => 'template-blocks/small-cta/small-cta.php',
          'category'          => 'formatting',
          'icon'              => 'align-center',
          'keywords'          => array( 'CTA', 'Call To Action')
      ));

      // Step Form
      acf_register_block_type(array(
          'name'              => 'step-form',
          'title'             => __('Multi-step Form'),
          'description'       => __('A 50/50 text and multi-step form'),
          'render_template'   => 'template-blocks/step-form/step-form.php',
          'category'          => 'formatting',
          'icon'              => 'slides',
          'keywords'          => array( 'Form', 'Contact')
      ));


    }
}

add_action('acf/init', 'my_acf_init_block_types');


 ?>
