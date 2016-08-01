<?php

/**
 * Administer the OAS ad system.
 */
function csp_ads_settings() {

  // Ad blocks (OAS positions)
  $form['blocks'] = array(
    '#type' => 'fieldset',
    '#title' => t('Ad blocks'),
    '#collapsible' => TRUE,
  );
  $form['blocks']['csp_ads_desktop'] = array(
    '#type' => 'textarea',
    '#title' => t('Desktop (large screens) OAS positions'),
    '#description' => t('Enter one OAS position name per line, a block will be created for each.'),
    '#default_value' => variable_get('csp_ads_desktop', ''),
  );
  $form['blocks']['csp_ads_mobile'] = array(
    '#type' => 'textarea',
    '#title' => t('Mobile (small screens) OAS positions'),
    '#description' => t('Enter one OAS position name per line, a block will be created for each.'),
    '#default_value' => variable_get('csp_ads_mobile', ''),
  );
  $form['blocks']['csp_ads_tablet'] = array(
    '#type' => 'textarea',
    '#title' => t('Tablet (med screens) OAS positions'),
    '#description' => t('Enter one OAS position name per line, a block will be created for each.'),
    '#default_value' => variable_get('csp_ads_tablet', ''),
  );

  // DX size declarations
  $form['dx'] = array(
    '#type' => 'fieldset',
    '#title' => t('DX Ad Serving'),
    '#collapsible' => TRUE,
  );
  $form['dx']['csp_ads_sizes'] = array(
    '#type' => 'textarea',
    '#title' => t('Ad Sizes'),
    '#description' => t('Declare sizes of each DX ad position in the format "\'x01\', [728, 90]".'),
    '#default_value' => variable_get('csp_ads_sizes', ''),
  );
  $defaults = array(
    'value' => '',
    'format' => 'full_html',
  );
  $csp_jx13 = variable_get('csp_ads_x13_jx', $defaults);
  $form['csp_ads_x13_jx'] = array(
    '#type' => 'text_format',
    '#title' => t('Define x13 JX script'),
    '#description' => t('Current x13 ads incompatible with DX.  Enter the x13 JX script here.'),
    '#default_value' => $csp_jx13['value'],
    '#format' => $csp_jx13['format'],
  );
  
  // Path alterations
  $form['paths'] = array(
    '#type' => 'fieldset',
    '#title' => t('Path mappings'),
    '#collapsible' => TRUE,
  );
  $form['paths']['csp_ads_paths'] = array(
    '#type' => 'textarea',
    '#title' => t('Define OAS path mappings'),
    '#description' => t('Enter one Drupal -> OAS path mapping per line in the following format: drupal/path|oas/path'),
    '#default_value' => variable_get('csp_ads_paths', ''),
  );
  
  // OAS Setup code
  $form['setup'] = array(
    '#type' => 'fieldset',
    '#title' => t('OAS Setup scripts'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['setup']['csp_ads_devurl'] = array(
    '#type' => 'textfield',
    '#title' => t('(Optional) Define external site URL'),
    '#description' => t('Useful for testing OAS ad delivery on a different domain name.'),
    '#default_value' => variable_get('csp_ads_devurl', ''),
  );
  $form['setup']['csp_ads_scripts'] = array(
    '#type' => 'textarea',
    '#title' => t('Define OAS scripts'),
    '#description' => t('These scripts will be added to the head of the site HTML. Use !page to insert URL.'),
    '#default_value' => variable_get('csp_ads_scripts', ''),
  );
  $form['setup']['csp_ads_dx_scripts'] = array(
    '#type' => 'textarea',
    '#title' => t('Define OAS DX scripts'),
    '#description' => t('These scripts will be added to the head of the site HTML. Use !page to insert URL.'),
    '#default_value' => variable_get('csp_ads_dx_scripts', ''),
  );
  
  return system_settings_form($form);
}