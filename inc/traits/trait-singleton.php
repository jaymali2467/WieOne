<?php

namespace WIEONE_THEME\Inc\traits;

trait singleton
{
  public function __construct() {}

  public function __clone() {}

  static $instance = [];

  final public static function get_instance()
  {
    $called_class = get_called_class();

    if (!isset($instance[$called_class])) {
      $instance[$called_class] = new $called_class();
      do_action('WieOne_theme_singleton_init%s', $called_class);
    }


    return $instance[$called_class];
  }
}
