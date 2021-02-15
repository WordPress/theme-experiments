<?php

function editor_palette() {
  add_theme_support( 'editor-color-palette', array(
    array(
      'name' => __( 'Black', 'mixin-styles-gb' ),
      'slug' => 'black',
      'color' => '#000000',
    ),
    array(
      'name' => __( 'Blue', 'mixin-styles-gb' ),
      'slug' => 'blue',
      'color' => '#2040c0',
    ),
    array(
      'name' => __( 'Violet', 'mixin-styles-gb' ),
      'slug' => 'violet',
      'color' => '#820bbb',
    ),
    array(
      'name' => __( 'Magenta', 'mixin-styles-gb' ),
      'slug' => 'magenta',
      'color' => '#cd00cd',
    ),
    array(
      'name' => __( 'Orange', 'mixin-styles-gb' ),
      'slug' => 'orange',
      'color' => '#ff870d',
    ),
    array(
      'name' => __( 'Yellow', 'mixin-styles-gb' ),
      'slug' => 'yellow',
      'color' => '#ffe000',
    ),
    array(
      'name' => __( 'Khaki', 'mixin-styles-gb' ),
      'slug' => 'khaki',
      'color' => '#bdb76b',
    ),
    array(
      'name' => __( 'Tan', 'mixin-styles-gb' ),
      'slug' => 'tan',
      'color' => '#d2b48c',
    ),
    array(
      'name' => __( 'Sandstone', 'mixin-styles-gb' ),
      'slug' => 'sandstone',
      'color' => '#a78d84',
    ),
    array(
      'name' => __( 'White', 'mixin-styles-gb' ),
      'slug' => 'white',
      'color' => '#ffffff',
    ),
    array(
      'name' => __( 'Pastel Blue', 'mixin-styles-gb' ),
      'slug' => 'pastel-blue',
      'color' => '#c4c4ff',
    ),
    array(
      'name' => __( 'Pastel Red', 'mixin-styles-gb' ),
      'slug' => 'pastel-red',
      'color' => '#ffc4c4',
    ),
    array(
      'name' => __( 'Vibrant Blue', 'mixin-styles-gb' ),
      'slug' => 'vibrant-blue',
      'color' => '#0000cc',
    ),
    array(
      'name' => __( 'Vibrant Red', 'mixin-styles-gb' ),
      'slug' => 'vibrant-red',
      'color' => '#cc0000',
    ),
  ) );
}

function editor_gradients() {
  add_theme_support( 'editor-gradient-presets', array(
    array(
      'name' => __( 'Gray', 'mixin-styles-gb' ),
      'gradient' => 'linear-gradient(to bottom, #ffffff 0%, #808080 100%)',
      'slug' => 'gray',
    ),
    array(
      'name' => __( 'Orange', 'mixin-styles-gb' ),
      'gradient' => 'linear-gradient(to bottom, #ffffff 0%, #ffb704 100%)',
      'slug' => 'orange',
    ),
    array(
      'name' => __( 'Bright Yellow', 'mixin-styles-gb' ),
      'gradient' => 'linear-gradient(to bottom, #ffffff 0%, #f8fe03 100%)',
      'slug' => 'bright-yellow',
    ),
    array(
      'name' => __( 'Yellow Green', 'mixin-styles-gb' ),
      'gradient' => 'linear-gradient(to bottom, #ffffff 0%, #cffa00 100%)',
      'slug' => 'yellow-green',
    ),
    array(
      'name' => __( 'Teal', 'mixin-styles-gb' ),
      'gradient' => 'linear-gradient(to bottom, #ffffff 0%, #0d7f9f 100%)',
      'slug' => 'teal',
    ),
    array(
      'name' => __( 'Violet', 'mixin-styles-gb' ),
      'gradient' => 'linear-gradient(to bottom, #ffffff 0%, #4811ae 100%)',
      'slug' => 'violet',
    ),
    array(
      'name' => __( 'Light Khaki', 'mixin-styles-gb' ),
      'gradient' => 'linear-gradient(to bottom, #ffffff 0%, #ded996 100%)',
      'slug' => 'light-khaki',
    ),
    array(
      'name' => __( 'Light Tan', 'mixin-styles-gb' ),
      'gradient' => 'linear-gradient(to bottom, #ffffff 0%, #e9d0ae 100%)',
      'slug' => 'light-tan',
    ),
    array(
      'name' => __( 'Light Sandstone', 'mixin-styles-gb' ),
      'gradient' => 'linear-gradient(to bottom, #ffffff 0%, #d3bab2 100%)',
      'slug' => 'light-sandstone',
    ),
  ) );
}
