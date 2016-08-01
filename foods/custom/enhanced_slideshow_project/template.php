<?

/**
 * Implements template_preprocess_page().
 */
function TEMPLATE_preprocess_page(&$vars) {
  // Enhanced Slideshow scripts
  if (isset($vars['node']) && $vars['node']->type == 'enhanced_slideshow') {
    drupal_add_js(drupal_get_path('theme', 'THEME') . '/js/jquery.cycle2.min.js', array('type' => 'file', 'scope' => 'footer', 'weight' => 10, 'group' => 'JS_DEFAULT'));
    drupal_add_js(drupal_get_path('theme', 'THEME') . '/js/enhancedslideshow.js', array('type' => 'file', 'scope' => 'footer', 'weight' => 10, 'group' => 'JS_DEFAULT'));
  }
