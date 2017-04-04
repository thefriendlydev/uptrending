<?php

class Lab {

  function __construct() {
    add_action('init', [$this, 'add_post_type']);
    add_action('init', [$this, 'add_taxonomy']);
  }

  function add_post_type() {
    $labels = [
      'name'          => 'Labs',
      'singular_name' => 'Lab',
      'add_new'       => 'Add New',
      'all_items'     => 'All Labs',
      'add_new_item'  => 'Add New Lab',
      'edit_item'     => 'Edit Lab',
      'new_item'      => 'New Lab',
      'view_item'     => 'View Lab',
      'search_items'  => 'Search Labs',
      'not_found'     => 'No Labs Found'
    ];
    $settings = [
      'labels'               => $labels,
      'public'               => true,
      'publicly_queryable'   => true,
      'show_ui'              => true,
      'menu_icon'            => 'dashicons-clipboard',
      'show_in_menu'         => true,
      'query_var'            => true,
      'rewrite'              => ['slug' => 'labs', 'with_front' => false],
      'capability_type'      => 'post',
      'has_archive'          => true,
      'hierarchical'         => false,
      'menu_position'        => 21,
      'supports'             => ['title', 'revisions'],
      'show_in_nav_menus'    => true
    ];
    register_post_type('lab', $settings);
  }

  function add_taxonomy() {
    register_taxonomy(
      'language',
      'lab',
      array(
        'label' => 'Programming Language',
        'rewrite' => ['slug' => 'language' ]
      )
    );
  }

}

new Lab();
