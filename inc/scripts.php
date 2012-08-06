<?php

function roots_scripts() {
  wp_enqueue_style('roots_bootstrap_style', get_template_directory_uri(), false, null);

  if (current_theme_supports('bootstrap-responsive')) {
    wp_enqueue_style('roots_bootstrap_responsive_style', get_template_directory_uri(), array('roots_bootstrap_style'), null);
  }

  // If you're not using Bootstrap, include H5BP's main.css:
  // wp_enqueue_style('roots_style', '/css/main.css', false, null);

  wp_enqueue_style('roots_app_style', get_template_directory_uri(), false, null);

  if (is_child_theme()) {
    wp_enqueue_style('roots_child_style', get_stylesheet_uri());
  }

  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '', '', '', false);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_register_script('roots_plugins', get_template_directory_uri(), false, null, false);
  wp_register_script('roots_main', get_template_directory_uri(), false, null, false);
  wp_enqueue_script('roots_plugins');
  wp_enqueue_script('roots_main');
}

add_action('wp_enqueue_scripts', 'roots_scripts', 100);
