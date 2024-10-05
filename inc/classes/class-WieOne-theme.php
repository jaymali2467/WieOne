<?php

/**
 * Bootstrap The Theme
 * 
 * @package WieOne
 */

namespace WIEONE_THEME\Inc;

use WIEONE_THEME\Inc\traits\singleton;

class WIEONE_THEME
{
  use singleton;

  protected function __construct()
  {
    //load class
    assets::get_instance();
    $this->setup_hooks();
  }

  protected function setup_hooks()
  {
    /**
     * Actions.
     */
    add_action('wp_enqueue_scripts', [$this, 'register_styles']);
    add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
  }
}
