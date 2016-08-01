<?php
/**
 * @file
 * enhanced_slideshow.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function enhanced_slideshow_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "ds" && $api == "ds") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function enhanced_slideshow_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_image_default_styles().
 */
function enhanced_slideshow_image_default_styles() {
  $styles = array();

  // Exported image style: enhanced_slideshow.
  $styles['enhanced_slideshow'] = array(
    'label' => 'enhanced_slideshow',
    'effects' => array(
      28 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 885,
          'height' => '',
          'upscale' => 0,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: enhanced_slideshow_thumb.
  $styles['enhanced_slideshow_thumb'] = array(
    'label' => 'enhanced_slideshow_thumb',
    'effects' => array(
      27 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 160,
          'height' => 100,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function enhanced_slideshow_node_info() {
  $items = array(
    'enhanced_slideshow' => array(
      'name' => t('Enhanced Slideshow'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
