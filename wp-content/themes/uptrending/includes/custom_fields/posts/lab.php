<?php

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_58e3e0b99a4aa',
  'title' => 'Lab',
  'fields' => array (
    array (
      'key' => 'field_58e3e0e27147e',
      'label' => 'Card Background Color',
      'name' => 'card_background_color',
      'type' => 'text',
      'instructions' => '',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_58e3e0eb7147f',
      'label' => 'Card Background Image',
      'name' => 'card_background_image',
      'type' => 'image',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'url',
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
    array (
      'key' => 'field_58e3e10f71480',
      'label' => 'Short Description',
      'name' => 'short_description',
      'type' => 'textarea',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => 4,
      'new_lines' => '',
    ),
    array (
      'key' => 'field_58e3e12b71481',
      'label' => 'Programming Language',
      'name' => 'programming_language',
      'type' => 'taxonomy',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'taxonomy' => 'language',
      'field_type' => 'select',
      'allow_null' => 0,
      'add_term' => 1,
      'save_terms' => 0,
      'load_terms' => 0,
      'return_format' => 'id',
      'multiple' => 0,
    ),
    array (
      'key' => 'field_58e3e15371482',
      'label' => 'Github Link',
      'name' => 'github_link',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'lab',
      ),
    ),
  ),
  'menu_order' => 0,
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
