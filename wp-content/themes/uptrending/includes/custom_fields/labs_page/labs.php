<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_58e3df57eadc9',
  'title' => 'Labs',
  'fields' => array (
    array (
      'key' => 'field_58e3df6b22e78',
      'label' => 'Labs',
      'name' => 'labs',
      'type' => 'post_object',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'post_type' => array (
        0 => 'lab',
      ),
      'taxonomy' => array (
      ),
      'allow_null' => 0,
      'multiple' => 1,
      'return_format' => 'object',
      'ui' => 1,
    ),
    array (
      'key' => 'field_58e3dfa622e79',
      'label' => 'Labs Paragraph Title',
      'name' => 'labs_paragraph_title',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'Looking for more?',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_58e3dfbf22e7a',
      'label' => 'Labs Paragraph',
      'name' => 'labs_paragraph',
      'type' => 'textarea',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'In addition to the freebies here, we frequently share our knowledge and experience through the <a href="#">UpTrending blog</a>. Be sure to check it out for more ideas on Design and Development.

Have an idea for an app or plugin? <a href="#">Let us know!</a>',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => 4,
      'new_lines' => 'wpautop',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-labs.php',
      ),
    ),
  ),
  'menu_order' => 1,
  'position' => 'acf_after_title',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => array (
    0 => 'the_content',
  ),
  'active' => 1,
  'description' => '',
));

endif;
