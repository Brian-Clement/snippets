<?php
/**
 * @file
 * Administration page callbacks for the Predictive Intelligence tracking module.
 */

/**
 * Form builder. Configure Predictive Intelligence tracking scripts.
 *
 * @ingroup forms
 * @see system_settings_form().
 */

function predictive_intelligence_admin_settings() {
  $form['predictive_intelligence_collect'] = array(
    '#type' => 'textfield',
    '#title' => t('Collect.js'),
    '#description' => t('Enter the Collect.js script.'),
    '#default_value' => variable_get('predictive_intelligence_collect', ''),
    '#size' => 60,
    '#required' => TRUE,
  );
  $form['predictive_intelligence_mid'] = array(
    '#type' => 'textfield',
    '#title' => t('MID'),
    '#description' => t('Enter the MID of the business unit for Predictive Intelligence tracking.'),
    '#default_value' => variable_get('predictive_intelligence_mid', ''),
    '#size' => 60,
    '#required' => TRUE,
  );
  $form['predictive_intelligence_child_mid'] = array(
    '#type' => 'textfield',
    '#title' => t('Child MID'),
    '#description' => t('Enter the MID of the child business unit for multi-MID tracking.'),
    '#default_value' => variable_get('predictive_intelligence_child_mid', ''),
    '#size' => 60,
    '#required' => TRUE,
  );

  // Custom tracking parameters
  $form['pi_tracking_fields'] = array(
    '#type' => 'fieldset',
    '#title' => t('Tracking Fields'),
    '#collapsible' => TRUE,
  );
  $form['pi_tracking_fields']['pi_item_preface'] = array(
    '#type' => 'textfield',
    '#title' => t('Site ID'),
    '#description' => t('Three letter site abbreviation to be prepended on the "item" tracking property.'),
    '#default_value' => variable_get('pi_item_preface', ''),
  );
  $form['pi_tracking_fields']['pi_section_term'] = array(
    '#type' => 'textfield',
    '#title' => t('Section Taxonomy Name'),
    '#description' => t('Enter the machine name for the taxonomy field responsible for Section tagging (i.e. section).'),
    '#default_value' => variable_get('pi_section_term', ''),
  );
  $form['pi_tracking_fields']['pi_section_menu'] = array(
    '#type' => 'textfield',
    '#title' => t('Section Menu'),
    '#description' => t('Enter the machine name for the menu containing your Section landing pages for trackiing inclusion.'),
    '#default_value' => variable_get('pi_section_menu', ''),
  );
  $form['pi_tracking_fields']['pi_section'] = array(
    '#type' => 'textfield',
    '#title' => t('Section Field Machine Name'),
    '#description' => t('Enter the machine name for the taxonomy field responsible for Section tagging (i.e. field_section).'),
    '#default_value' => variable_get('pi_section', ''),
  );
  $form['pi_tracking_fields']['pi_keywords'] = array(
    '#type' => 'textfield',
    '#title' => t('Keyword Field Machine Name'),
    '#description' => t('Enter the machine name for the taxonomy field responsible for keyword tagging (i.e. field_taxonomy).'),
    '#default_value' => variable_get('pi_keywords', ''),
  );

  // Domain Control
  $form['pi_tracking_domain_control'] = array(
    '#type' => 'fieldset',
    '#title' => t('Domain Control'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['pi_tracking_domain_control']['pi_tracking_domain'] = array(
    '#type' => 'textfield',
    '#title' => t('Tracking Domain'),
    '#description' => t('Indicate the domain that tracking should be limited to.  This prevents tracking code from running on development environments and passing publicly inaccessible content to the PI Catalog.'),
    '#default_value' => variable_get('pi_tracking_domain', ''),
  );

  return system_settings_form($form);
}
