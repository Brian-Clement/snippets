<?php

/**
 * Block content callback for each OAS Ad position.
 */
function csp_ads_block_process($delta) {
  global $oas_enabled;
  global $node;
  $node = menu_get_object();  
  
  // Grab all the defined OAS positions for desktop/mobile.
  $desktop = _csp_ads_process_var(variable_get('csp_ads_desktop', ''));
  $mobile  = _csp_ads_process_var(variable_get('csp_ads_mobile', ''));
  $tablet  = _csp_ads_process_var(variable_get('csp_ads_tablet', "x19\nx39"));
  $enabled = array_merge($desktop, $mobile, $tablet);
  
  // Make sure the delta is enabled on the admin side.
  $not_enabled = TRUE;
  foreach ($enabled as $ad_position) {
    if ($delta == 'oas_desktop_'. $ad_position || $delta == 'oas_mobile_'. $ad_position || $delta == 'oas_tablet_'. $ad_position) {
      $not_enabled = FALSE;
    }
  }
  
  // Return empty output if not enabled on admin side.
  if ($not_enabled) {
    return '';
  }
  
  // Add JS/CSS for OAS.
  $mod_path = drupal_get_path('module', 'csp_ads');
  drupal_add_js($mod_path .'/scripts/oas.js');
  drupal_add_css($mod_path .'/styles/oas.css');

  // Determine OAS position from block delta.
  preg_match('/oas_([a-z]+)_([a-z0-9]+)/i', $delta, $matches);
  $already_added = FALSE;
  if (isset($oas_enabled[$matches[1]])) {
    foreach ($oas_enabled[$matches[1]] as $oas_key => $oas_value) {
      if ($delta == 'oas_desktop_'. $oas_value || $delta == 'oas_mobile_'. $oas_value || $delta == 'oas_tablet_'. $oas_value) {
        $already_added = TRUE;
      }
    }
  }
  if (!$already_added) {
    $oas_enabled[$matches[1]][] = $matches[2];
  }

  

  // Produce JS markup that inserts the ad in the block.
  $output = '<div class="ad-container ad-'.$matches[2].'"><div class="ad">';
  if (isset($node->type) && $node->type == 'enhanced_slideshow') {
    $output .= '<div id="oas_' . $matches[2] .'"></div>';
    $output .= '<script type="text/javascript">oas_tag.loadAd("' . $matches[2] .'");</script>';
  } else {
    $output .= '<script> OAS_AD("'. $matches[2] .'"); </script>';
    }
  $output .= '</div></div>';

  return $output ;
}