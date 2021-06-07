<?php

  add_theme_support('post-thumbnails');
  add_theme_support('widgets');

  function set_excerpt_length() {
    return 20;
  }

  function my_sidebar() {
    register_sidebar([
      'name' => 'Blog Sidebar',
      'id' => 'blog-sidebar',
      'before_title' => '<h4>',
      'after_title' => '</h4>',
    ]);
  }
  add_action('widgets_init', 'my_sidebar');

  add_filter('excerpt_length', 'set_excerpt_length');